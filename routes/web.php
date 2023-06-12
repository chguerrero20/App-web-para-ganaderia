<?php

use App\Http\Controllers\GanadoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\RazaController;
use App\Http\Controllers\VacunaController;
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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('ganados',GanadoController::class);
Route::resource('razas',RazaController::class);
Route::resource('proveedors',ProveedorController::class);
Route::resource('vacunas',VacunaController::class);
