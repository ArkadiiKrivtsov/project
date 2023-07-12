<?php

use App\Http\Controllers\AdminSectionController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'home']);
Route::get('/apartment/{id}', [PrivateApartmentController::class, 'load']);
Route::get('/admin_section', [AdminSectionController::class, 'adminSection']);

Route::get('/catalog', [CatalogController::class, 'catalog']);
Route::get('/create', [PrivateApartmentController::class, 'read']);
Route::post('/create', [PrivateApartmentController::class, 'create']);
Route::get('/delete/{id}', [PrivateApartmentController::class, 'delete']);
Route::get('/update/{id}', [PrivateApartmentController::class, 'updateForm']);
Route::put('/update/{id}', [PrivateApartmentController::class, 'update']);

Route::get('/login', [AuthController::class, 'loadLoginPage']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'loadRegisterPage']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/logout', [AuthController::class, 'logout']);
