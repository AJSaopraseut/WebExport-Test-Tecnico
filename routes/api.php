<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//crud de usuarios

Route::get('/usuarios', 'App\Http\Controllers\api\UsuarioController@index');
Route::get('/usuarios/{id}', 'App\Http\Controllers\api\UsuarioController@show');
Route::post('/usuarios', 'App\Http\Controllers\api\UsuarioController@store');
Route::put('/usuarios/{id}', 'App\Http\Controllers\api\UsuarioController@update');
Route::delete('/usuarios/{id}', 'App\Http\Controllers\api\UsuarioController@destroy');

//crud de roles

Route::get('/roles', 'App\Http\Controllers\api\RoleController@index');
Route::get('/roles/{id}', 'App\Http\Controllers\api\RoleController@show');
Route::post('/roles', 'App\Http\Controllers\api\RoleController@store');
Route::put('/roles/{id}', 'App\Http\Controllers\api\RoleController@update');
Route::delete('/roles/{id}', 'App\Http\Controllers\api\RoleController@destroy');
