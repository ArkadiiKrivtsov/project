<?php

use App\Http\Controllers\AdminSectionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PrivateApartmentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/apartment/{id}', [PrivateApartmentController::class, 'load']);
Route::get('/catalog', [CatalogController::class, 'catalog']);

Route::get('/buy/{id}', [OrderController::class, 'loadOrderPage']);
Route::post('/buy/{id}', [OrderController::class, 'makeOrder']);


Route::middleware("auth")->group(function () {
    Route::get('/admin_section', [AdminSectionController::class, 'productEditor']);
    Route::get('/create', [PrivateApartmentController::class, 'read']);
    Route::post('/create', [PrivateApartmentController::class, 'create']);
    Route::get('/delete/{id}', [PrivateApartmentController::class, 'delete']);
    Route::get('/update/{id}', [PrivateApartmentController::class, 'updateForm']);
    Route::put('/update/{id}', [PrivateApartmentController::class, 'update']);
    Route::get('/logout', [AuthController::class, 'logout']);
    Route::get('/orders', [AdminSectionController::class, 'ordersTable']);
    Route::get('/users', [AdminSectionController::class, 'usersTable']);
    Route::get('/register', [AuthController::class, 'loadRegisterPage']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::get('/banks', [AdminSectionController::class, 'readBanksTable']);
    Route::get('/createBank', [AdminSectionController::class, 'loadCreateBankForm']);
    Route::post('/createBank', [AdminSectionController::class, 'createBank']);
    Route::get('/deleteBank/{id}', [AdminSectionController::class, 'deleteBank']);
    Route::get('/updateBank/{id}', [AdminSectionController::class, 'updateBankForm']);
    Route::put('/updateBank/{id}', [AdminSectionController::class, 'updateBank']);
});

Route::middleware("guest")->group(function () {
    Route::get('/login', [AuthController::class, 'loadLoginPage']);
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});
