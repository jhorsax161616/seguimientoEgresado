<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SeguimientoController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(SeguimientoController::class)->group(function() {
    Route::get('seguimiento', 'index')->name('seguimiento.index');
    Route::get('seguimiento/create', 'create')->name('seguimiento.create');

    Route::get('seguimiento/{egresado}', 'show')->name('seguimiento.show');
});
