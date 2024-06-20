<?php

namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\CreateProductos;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\VentaRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Productos;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos=Productos::all();

        $ventas = Venta::join("productos","ventas.id","productos.id")
            ->select("ventas.cantidad","ventas.total","ventas.id","productos.nombre","productos.precio")
            ->get();

        return view('admin.venta.index', compact('ventas','productos'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $productos=Productos::all();
        $venta = new Venta();
        return view('venta.create', compact('venta','productos'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(VentaRequest $request): RedirectResponse
{
    // Encuentra el producto relacionado
    $producto = Productos::find($request->producto_id);
    if (!$producto) {
        return redirect()->back()->with('error', 'Producto no encontrado.');
    }

    // Calcula el total
    $total = $request->cantidad * $producto->precio;

    // Crea la venta con los datos del formulario
    $venta = new Venta();
    $venta->producto_id = $request->producto_id;
    $venta->cantidad = $request->cantidad;
    $venta->total = $total;

    // Guarda la venta en la base de datos
    $venta->save();

    // Redirección a la vista principal con un mensaje
    return redirect()->route('ventas.index')->with('message', 'Guardado Satisfactoriamente!');
    }




    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $venta = Venta::find($id);

        return view('venta.show', compact('venta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $venta = Venta::find($id);

        return view('venta.edit', compact('venta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(VentaRequest $request, Venta $venta): RedirectResponse
    {
        $venta->update($request->validated());

        return Redirect::route('ventas.index')
            ->with('success', 'Venta updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Venta::find($id)->delete();

        return Redirect::route('ventas.index')
            ->with('success', 'Venta deleted successfully');
    }
}