<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Dash2Controller;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\VentasController;

Route::get('/', function () {
    return view('/home');
});

// Rutas CRUD



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

//VENTAS
Route::get('admin/ventas/crear', 'App\Http\Controllers\VentasController@crear')->name('admin/ventas/crear');
Route::put('admin/ventas/store', 'App\Http\Controllers\VentasController@store')->name('admin/ventas/store');

/* Leer */
Route::get('admin/ventas/show/{id}', 'App\Http\Controllers\VentasController@show')->name('admin/ventas/detalles');

/* Actualizar */
Route::get('admin/ventas/actualizar/{id}', 'App\Http\Controllers\VentasController@actualizar')->name('admin/ventas/actualizar');
Route::put('admin/ventas/update/{id}', 'App\Http\Controllers\VentasController@update')->name('admin/ventas/update');

/* Eliminar */
Route::put('admin/ventas/eliminar/{id}', 'App\Http\Controllers\VentasController@eliminar')->name('admin/ventas/eliminar');

/* Vista Ventas */
Route::get('admin/ventas', 'App\Http\Controllers\VentasController@index')->name('admin/ventas');


// Rutas Inventario
/* Crear */
Route::get('admin/inventario/crear', 'App\Http\Controllers\InventarioController@crear')->name('admin/inventario/crear');
Route::put('admin/inventario/store', 'App\Http\Controllers\InventarioController@store')->name('admin/inventario/store');

/* Leer */
Route::get('admin/inventario/show/{id}', 'App\Http\Controllers\InventarioController@show')->name('admin/inventario/detalles');

/* Actualizar */
Route::get('admin/inventario/actualizar/{id}', 'App\Http\Controllers\InventarioController@actualizar')->name('admin/inventario/actualizar');
Route::put('admin/inventario/update/{id}', 'App\Http\Controllers\InventarioController@update')->name('admin/inventario/update');

/* Eliminar */
Route::put('admin/inventario/eliminar/{id}', 'App\Http\Controllers\InventarioController@eliminar')->name('admin/inventario/eliminar');

/* Vista*/
Route::get('admin/inventario', 'App\Http\Controllers\InventarioController@index')->name('admin/inventario');


// Rutas Puestos
/* Crear */
Route::get('admin/puestos/crear', 'App\Http\Controllers\PuestosController@crear')->name('admin/puestos/crear');
Route::put('admin/puestos/store', 'App\Http\Controllers\PuestosController@store')->name('admin/puestos/store');

/* Leer */
Route::get('admin/puestos/show/{id}', 'App\Http\Controllers\PuestosController@show')->name('admin/puestos/detalles');

/* Actualizar */
Route::get('admin/puestos/actualizar/{id}', 'App\Http\Controllers\PuestosController@actualizar')->name('admin/puestos/actualizar');
Route::put('admin/puestos/update/{id}', 'App\Http\Controllers\PuestosController@update')->name('admin/puestos/update');
/* Eliminar */
Route::put('admin/puestos/eliminar/{id}', 'App\Http\Controllers\PuestosController@eliminar')->name('admin/puestos/eliminar');

/* Vista*/
Route::get('admin/puestos', 'App\Http\Controllers\PuestosController@index')->name('admin/puestos');


Route::get('/dash2', 'App\Http\Controllers\Dash2Controller@index')->name('/dash2');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/dash2', [Dash2Controller::class, 'index'])->name('dash2')->middleware('auth');
