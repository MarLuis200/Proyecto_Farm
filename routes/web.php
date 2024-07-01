<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\Dash2Controller;
use App\Http\Controllers\EmpleadosController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\PuestosController;
use App\Http\Controllers\TiposController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\PersonasController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\CarritoController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index']);

// Autenticación
Auth::routes();

// Dashboard
Route::get('/dash2', [Dash2Controller::class, 'index'])->name('dash2')->middleware('auth');
    
// Ayuda
Route::get('/ayuda', 'App\Http\Controllers\AyudaController@index')->name('ayuda');
Route::get('/ayuda/preguntas', 'App\Http\Controllers\PreguntasController@index')->name('ayuda.preguntas');
Route::get('/ayuda/contacto', 'App\Http\Controllers\ContactoController@index')->name('ayuda.contacto');

// Bebes
Route::get('/bebes', 'App\Http\Controllers\BebesController@index')->name('bebes');
Route::get('/bebes/pañales', 'App\Http\Controllers\PañalesController@index')->name('bebes.pañales');
Route::get('/bebes/formulas', 'App\Http\Controllers\FormulasController@index')->name('bebes.formulas');
Route::get('/bebes/infantiles', 'App\Http\Controllers\InfantilesController@index')->name('bebes.infantiles');

// Departamentos
Route::get('/departamentos', 'App\Http\Controllers\DepartamentosController@index')->name('departamentos');
Route::get('/departamentos/alimentos', 'App\Http\Controllers\AlimentosController@index')->name('departamentos.alimentos');
Route::get('/departamentos/bebidas', 'App\Http\Controllers\BebidasController@index')->name('departamentos.bebidas');
Route::get('/departamentos/higiene', 'App\Http\Controllers\HigieneController@index')->name('departamentos.higiene');

// Complementos
Route::get('/vitaminas', 'App\Http\Controllers\ComplementosVitController@index')->name('complementosVit');
Route::get('/vitaminas/complementos', 'App\Http\Controllers\ComplementosController@index')->name('vitaminas.complementos');
Route::get('/vitaminas/multivitaminas', 'App\Http\Controllers\MultivitaminasController@index')->name('vitaminas.multivitaminas');
Route::get('/vitaminas/suplementos', 'App\Http\Controllers\SuplementosController@index')->name('vitaminas.suplementos');

// Salud
Route::get('/salud', 'App\Http\Controllers\SaludController@index')->name('salud');
Route::get('/salud/antibioticos', 'App\Http\Controllers\AntibioticosController@index')->name('salud.antibioticos');
Route::get('/salud/dolor', 'App\Http\Controllers\DolorController@index')->name('salud.dolor');
Route::get('/salud/dermatologia', 'App\Http\Controllers\DermatologiaController@index')->name('salud.dermatologia');
Route::get('/salud/saludsexual', 'App\Http\Controllers\SexualController@index')->name('salud.saludsexual');

// Ofertas
Route::get('/fin-de-semana', 'App\Http\Controllers\OfertasFinDeController@index')->name('fin-de-semana');

// Empresa
Route::get('/conocenos', 'App\Http\Controllers\EmpresaController@index')->name('conocenos');
Route::get('/politicas-de-privacidad', 'App\Http\Controllers\PoliticasController@index')->name('politicas-de-privacidad');
Route::get('/terminos-y-condiciones', 'App\Http\Controllers\TerminosController@index')->name('terminos-y-condiciones');

// Carrito de Compras
Route::get('/carrito', 'App\Http\Controllers\CarritoController@index')->name('carrito');
Route::post('/carrito/add', [CarritoController::class, 'addToCart'])->name('carrito.add');
Route::delete('/carrito/remove/{id}', [CarritoController::class, 'remove'])->name('carrito.remove');
Route::put('/carrito/update/{id}', [CarritoController::class, 'update'])->name('carrito.update');
Route::post('/carrito/comprar', [CarritoController::class, 'comprar'])->name('carrito.comprar');

// Rutas CRUD de Productos
Route::get('admin/productos', [ProductosController::class, 'index'])->name('admin.productos');
Route::get('admin/productos/crear', [ProductosController::class, 'crear'])->name('admin.productos.crear');
Route::get('admin/productos/show/{id}', [ProductosController::class, 'show'])->name('admin.productos.detalles');
Route::get('admin/productos/actualizar/{id}', [ProductosController::class, 'actualizar'])->name('admin.productos.actualizar');
Route::put('admin/productos/update/{id}', [ProductosController::class, 'update'])->name('admin.productos.update');
Route::put('admin/productos/eliminar/{id}', [ProductosController::class, 'eliminar'])->name('admin.productos.eliminar');
Route::put('admin/productos/store', [ProductosController::class, 'store'])->name('admin.productos.store');

// Rutas CRUD de Clientes
Route::get('admin/clientes', [ClientesController::class, 'index'])->name('admin.clientes');
Route::get('admin/clientes/crear', [ClientesController::class, 'crear'])->name('admin.clientes.crear');
Route::get('admin/clientes/show/{id}', [ClientesController::class, 'show'])->name('admin.clientes.detalles');
Route::get('admin/clientes/actualizar/{id}', [ClientesController::class, 'actualizar'])->name('admin.clientes.actualizar');
Route::put('admin/clientes/update/{id}', [ClientesController::class, 'update'])->name('admin.clientes.update');
Route::put('admin/clientes/eliminar/{id}', [ClientesController::class, 'eliminar'])->name('admin.clientes.eliminar');
Route::put('admin/clientes/store', [ClientesController::class, 'store'])->name('admin.clientes.store');

// Rutas CRUD de Proveedores
Route::get('admin/proveedores', [ProveedoresController::class, 'index'])->name('admin.proveedores');
Route::get('admin/proveedores/crear', [ProveedoresController::class, 'crear'])->name('admin.proveedores.crear');
Route::get('admin/proveedores/show/{id}', [ProveedoresController::class, 'show'])->name('admin.proveedores.detalles');
Route::get('admin/proveedores/actualizar/{id}', [ProveedoresController::class, 'actualizar'])->name('admin.proveedores.actualizar');
Route::put('admin/proveedores/update/{id}', [ProveedoresController::class, 'update'])->name('admin.proveedores.update');
Route::put('admin/proveedores/eliminar/{id}', [ProveedoresController::class, 'eliminar'])->name('admin.proveedores.eliminar');
Route::put('admin/proveedores/store', [ProveedoresController::class, 'store'])->name('admin.proveedores.store');

// Rutas CRUD de Ventas
Route::get('admin/ventas', [VentaController::class, 'index'])->name('admin.ventas');
Route::get('admin/ventas/crear', [VentaController::class, 'crear'])->name('admin.ventas.crear');
Route::get('admin/ventas/show/{id}', [VentaController::class, 'show'])->name('admin.ventas.detalles');
Route::get('admin/ventas/actualizar/{id}', [VentaController::class, 'actualizar'])->name('admin.ventas.actualizar');
Route::put('admin/ventas/update/{id}', [VentaController::class, 'update'])->name('admin.ventas.update');
Route::put('admin/ventas/eliminar/{id}', [VentaController::class, 'eliminar'])->name('admin.ventas.eliminar');
Route::put('admin/ventas/store', [VentaController::class, 'store'])->name('admin.ventas.store');

// Rutas CRUD de Inventario
Route::get('admin/inventario', [InventarioController::class, 'index'])->name('admin.inventario');
Route::get('admin/inventario/crear', [InventarioController::class, 'crear'])->name('admin.inventario.crear');
Route::get('admin/inventario/show/{id}', [InventarioController::class, 'show'])->name('admin.inventario.detalles');
Route::get('admin/inventario/actualizar/{id}', [InventarioController::class, 'actualizar'])->name('admin.inventario.actualizar');
Route::put('admin/inventario/update/{id}', [InventarioController::class, 'update'])->name('admin.inventario.update');
Route::put('admin/inventario/eliminar/{id}', [InventarioController::class, 'eliminar'])->name('admin.inventario.eliminar');
Route::put('admin/inventario/store', [InventarioController::class, 'store'])->name('admin.inventario.store');

// Rutas CRUD de Puestos
Route::get('admin/puestos', [PuestosController::class, 'index'])->name('admin.puestos');
Route::get('admin/puestos/crear', [PuestosController::class, 'crear'])->name('admin.puestos.crear');
Route::get('admin/puestos/show/{id}', [PuestosController::class, 'show'])->name('admin.puestos.detalles');
Route::get('admin/puestos/actualizar/{id}', [PuestosController::class, 'actualizar'])->name('admin.puestos.actualizar');
Route::put('admin/puestos/update/{id}', [PuestosController::class, 'update'])->name('admin.puestos.update');
Route::put('admin/puestos/eliminar/{id}', [PuestosController::class, 'eliminar'])->name('admin.puestos.eliminar');
Route::put('admin/puestos/store', [PuestosController::class, 'store'])->name('admin.puestos.store'); 

// Rutas CRUD de Empleados
Route::get('admin/empleados', [EmpleadosController::class, 'index'])->name('admin.empleados');
Route::get('admin/empleados/crear', [EmpleadosController::class, 'crear'])->name('admin.empleados.crear');
Route::get('admin/empleados/show/{id}', [EmpleadosController::class, 'show'])->name('admin.empleados.detalles');
Route::get('admin/empleados/actualizar/{id}', [EmpleadosController::class, 'actualizar'])->name('admin.empleados.actualizar');
Route::put('admin/empleados/update/{id}', [EmpleadosController::class, 'update'])->name('admin.empleados.update');
Route::put('admin/empleados/eliminar/{id}', [EmpleadosController::class, 'eliminar'])->name('admin.empleados.eliminar');
Route::put('admin/empleados/store', [EmpleadosController::class, 'store'])->name('admin.empleados.store');

// Rutas CRUD de Personas
Route::get('admin/personas', [PersonasController::class, 'index'])->name('admin.personas');
Route::get('admin/personas/crear', [PersonasController::class, 'crear'])->name('admin.personas.crear');
Route::get('admin/personas/show/{id}', [PersonasController::class, 'show'])->name('admin.personas.detalles');
Route::get('admin/personas/actualizar/{id}', [PersonasController::class, 'actualizar'])->name('admin.personas.actualizar');
Route::put('admin/personas/update/{id}', [PersonasController::class, 'update'])->name('admin.personas.update');
Route::put('admin/personas/eliminar/{id}', [PersonasController::class, 'eliminar'])->name('admin.personas.eliminar');
Route::put('admin/personas/store', [PersonasController::class, 'store'])->name('admin.personas.store');

// Rutas CRUD de Tipos
Route::get('admin/tipos', [TiposController::class, 'index'])->name('admin.tipos');
Route::get('admin/tipos/crear', [TiposController::class, 'crear'])->name('admin.tipos.crear');
Route::get('admin/tiposshow/{id}', [TiposController::class, 'show'])->name('admin.tipos.detalles');
Route::get('admin/tipos/actualizar/{id}', [TiposController::class, 'actualizar'])->name('admin.tipos.actualizar');
Route::put('admin/tipos/update/{id}', [TiposController::class, 'update'])->name('admin.tipos.update');
Route::put('admin/tipos/eliminar/{id}', [TiposController::class, 'eliminar'])->name('admin.tipos.eliminar');
Route::put('admin/tipos/store', [TiposController::class, 'store'])->name('admin.tipos.store');

// Rutas de Vistas de Productos
Route::get('/producto/{id}/vista', [ProductosController::class, 'showProducto'])->name('producto.vista');


