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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('productos/','ProductosController@listar')->name('productos.listar');
Route::get('productos/crear','ProductosController@crear')->name('productos.crear');
Route::post('productos/guardar','ProductosController@guardar')->name('productos.guardar');
Route::get('productos/mostrar','ProductosController@mostrar')->name('productos.mostrar');
Route::post('productos/editar','ProductosController@editar')->name('productos.editar');
Route::post('productos/actualizar','ProductosController@actualizar')->name('productos.actualizar');
Route::post('productos/eliminar','ProductosController@eliminar')->name('productos.eliminar');

Route::get('categoria/listar','ProductosController@categoria_listar')->name('categoria.listar');
Route::get('categoria/crear','ProductosController@categoria_crear')->name('categoria.crear');
Route::post('categoria/guardar','ProductosController@categoria_guardar')->name('categoria.guardar');
Route::get('categoria/mostrar','ProductosController@categoria_mostrar')->name('categoria.mostrar');
Route::post('categoria/editar','ProductosController@categoria_editar')->name('categoria.editar');
Route::post('categoria/actualizar','ProductosController@categoria_actualizar')->name('categoria.actualizar');
Route::post('categoria/eliminar','ProductosController@categoria_eliminar')->name('categoria.eliminar');
