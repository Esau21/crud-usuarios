<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/usuarios', 'UserController@index')->name('usuarios.index');
Route::get('/nuevo', 'UserController@create')->name('nuevo');
Route::post('/usuarios/crear', 'UserController@store')->name('/usuarios/crear');
Route::get('usuarios/{id}/editar', 'UserController@edit')->name('editar');
Route::put('usuarios/{id}','UserController@update');
Route::delete('/usuarios/{id}/eliminar', 'UserController@destroy');
