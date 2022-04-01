<?php

use App\Http\Controllers\administrarController;
use App\Http\Controllers\navegacionController;
use App\Http\Controllers\agregarController;
use Illuminate\Support\Facades\Route;

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

// navegacion

Route::get('verTodo', [navegacionController::class, 'verTodo'])->name("nav.verTodo");
Route::get('administrar', [navegacionController::class, 'administrar'])->name("nav.administrar");
Route::get('crear', [navegacionController::class, 'crear'])->name("nav.crear");

// administrar
Route::delete('usuarioBorrar/{id}', [administrarController::class, 'usuarioBorrar'])->name("usuarioBorrar");
Route::get('usuarioEditar/{id}', [administrarController::class, 'usuarioEditar'])->name("usuarioEditar");
Route::post('usuarioGuardarCambios', [administrarController::class, 'usuarioGuardarCambios'])->name("usuarioGuardarCambios");

Route::delete('rolBorrar/{id}', [administrarController::class, 'rolBorrar'])->name("rolBorrar");
Route::get('rolEditar/{id}', [administrarController::class, 'rolEditar'])->name("rolEditar");
Route::post('rolGuardarCambios', [administrarController::class, 'rolGuardarCambios'])->name("rolGuardarCambios");

// agregar

Route::post('usuarioCrear', [agregarController::class, 'usuarioCrear'])->name("usuarioCrear");
Route::post('rolCrear', [agregarController::class, 'rolCrear'])->name("rolCrear");



Route::get('/', function () {
    return redirect()->route('nav.verTodo');
});



