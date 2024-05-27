<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisteredUserController;

Route::get('/', function () {
    return view('/home');
});

// Rutas CRUD

/* Home */
Route::get('admin/home', 'App\Http\Controllers\HomeController@index')->name('admin/home');


/* Crear */
Route::get('admin/productos/crear', 'App\Http\Controllers\ProductosController@crear')->name('admin/productos/crear');
Route::put('admin/productos/store', 'App\Http\Controllers\ProductosController@store')->name('admin/productos/store');

/* Leer */
Route::get('admin/productos/show/{id}', 'App\Http\Controllers\ProductosController@show')->name('admin/productos/detalles');

/* Actualizar */
Route::get('admin/productos/actualizar/{id}', 'App\Http\Controllers\ProductosController@actualizar')->name('admin/productos/actualizar');
Route::put('admin/productos/update/{id}', 'App\Http\Controllers\ProductosController@update')->name('admin/productos/update');

/* Eliminar */
Route::put('admin/productos/eliminar/{id}', 'App\Http\Controllers\ProductosController@eliminar')->name('admin/productos/eliminar');

/* Vista Principal */
Route::get('admin/productos', 'App\Http\Controllers\ProductosController@index')->name('admin/productos');


/* Crear  Cliente*/
Route::get('admin/clientes/crear', 'App\Http\Controllers\ClientesController@crear')->name('admin/clientes/crear');
Route::put('admin/clientes/store', 'App\Http\Controllers\ClientesController@store')->name('admin/clientes/store');

/* Leer */
Route::get('admin/clientes/show/{id}', 'App\Http\Controllers\ClientesController@show')->name('admin/clientes/detalles');

/* Actualizar */
Route::get('admin/clientes/actualizar/{id}', 'App\Http\Controllers\ClientesController@actualizar')->name('admin/clientes/actualizar');
Route::put('admin/clientes/update/{id}', 'App\Http\Controllers\ClientesController@update')->name('admin/clientes/update');

/* Eliminar */
Route::put('admin/clientes/eliminar/{id}', 'App\Http\Controllers\ClientesController@eliminar')->name('admin/clientes/eliminar');

/* Vista Clientes */
Route::get('admin/clientes', 'App\Http\Controllers\ClientesController@index')->name('admin/clientes');

// Rutas PROVEEDORES
/* Crear */
Route::get('admin/proveedores/crear', 'App\Http\Controllers\ProveedoresController@crear')->name('admin/proveedores/crear');
Route::put('admin/proveedores/store', 'App\Http\Controllers\ProveedoresController@store')->name('admin/proveedores/store');

/* Leer */
Route::get('admin/proveedores/show/{id}', 'App\Http\Controllers\ProveedoresController@show')->name('admin/proveedores/detalles');

/* Actualizar */
Route::get('admin/proveedores/actualizar/{id}', 'App\Http\Controllers\ProveedoresController@actualizar')->name('admin/proveedores/actualizar');
Route::put('admin/proveedores/update/{id}', 'App\Http\Controllers\ProveedoresController@update')->name('admin/proveedores/update');

/* Eliminar */
Route::put('admin/proveedores/eliminar/{id}', 'App\Http\Controllers\ProveedoresController@eliminar')->name('admin/proveedores/eliminar');

/* Vista Clientes */
Route::get('admin/proveedores', 'App\Http\Controllers\ProveedoresController@index')->name('admin/proveedores');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
