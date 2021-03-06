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

Route::get('detalles/{id}/', [galeriaController::class, 'show'])->name('galeria.show');
Route::get('/', [galeriaController::class, 'index'])->name('home');
Route::get('agregar',[galeriaController::class, 'create'])->name('galeria.create');
Route::post('agregar', [galeriaController::class, 'store'])->name('galeria.store');
Route::get('detalle/{id}', [galeriaController::class, 'destroy'])->name('galeria.delete');
Route::get('editar/{id}', [galeriaController::class, 'edit'])->name('galeria.edit');
Route::patch('edita/{elemento}', [galeriaController::class, 'update'])->name('galeria.update');

