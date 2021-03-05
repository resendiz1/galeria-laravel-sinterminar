<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\galeriaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [galeriaController::class, 'index'])->name('home');


Route::view('detalles', 'detalles')->name('detalles');
Route::get('agregar',[galeriaController::class, 'create'])->name('galeria.create');
Route::post('agregar', [galeriaController::class, 'store'])->name('galeria.store');

