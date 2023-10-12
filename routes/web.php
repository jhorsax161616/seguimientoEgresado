<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Egresados\EgresadoController;
use Illuminate\Support\Facades\Auth;

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
Auth::routes();

Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home')->middleware('auth:sanctum');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth:sanctum');

Route::resource('usuarios', UserController::class)->middleware('auth:sanctum');
Route::resource('egresados', EgresadoController::class)->middleware('auth:sanctum');

Route::view('nosotros', 'nosotros')->name('nosotros');