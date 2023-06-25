<?php

use App\Http\Controllers\AdminSectionController;
use App\Http\Controllers\ApartmentController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\CreateApartmentController;
use App\Http\Controllers\HomeController;
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
Route::get('/apartment/{id}', [ApartmentController::class, 'apartment']);
Route::get('/admin_section', [AdminSectionController::class, 'adminSection']);
Route::get('/catalog', [CatalogController::class, 'catalog']);
Route::get('/create', [CreateApartmentController::class, 'createApartment']);
Route::post('/create', [CreateApartmentController::class, 'addApartment']);