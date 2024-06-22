<?php
namespace App\Http\Controllers;

use App\Models\Venta;
use App\Models\Productos;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\VentaRequest;
use Illuminate\View\View;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Productos::all();
        $ventas = Venta::join("productos", "ventas.producto_id", "=", "productos.id")
            ->select("ventas.cantidad", "ventas.total", "ventas.id", "productos.nombre", "productos.precio")
            ->get();

        return view('admin.venta.index', compact('ventas', 'productos'));
    }

    public function store(VentaRequest $request): RedirectResponse
    {
        $producto = Productos::find($request->producto_id);
        if (!$producto) {
            return redirect()->back()->with('error', 'Producto no encontrado.');
        }

        $total = $request->cantidad * $producto->precio;

        $venta = new Venta();
        $venta->producto_id = $request->producto_id;
        $venta->cantidad = $request->cantidad;
        $venta->total = $total;

        $venta->save();

        return redirect()->route('ventas.index')->with('message', 'Guardado Satisfactoriamente!');
    }

    public function show($id)
    {
        $venta = Venta::find($id);
        return view('admin.venta.detalles', compact('venta'));
    }

    public function actualizar($id)
    {
        $venta = Venta::find($id);
        $productos = Productos::all();
        return view('admin.venta.actualizar', compact('venta', 'productos'));
    }
    public function update(VentaRequest $request, $id): RedirectResponse
{
    $venta = Venta::find($id);
    if (!$venta) {
        return redirect()->back()->with('error', 'Venta no encontrada.');
    }

    
    $producto = Productos::find($request->producto_id);
    if (!$producto) {
        return redirect()->back()->with('error', 'Producto no encontrado.');
    }

   
    $total = $request->cantidad * $producto->precio;
    $venta->producto_id = $request->producto_id;
    $venta->cantidad = $request->cantidad;
    $venta->total = $total;
    
    $venta->save();
    return redirect()->route('ventas.index')->with('message', 'Actualizado Satisfactoriamente!');
}

    public function eliminar($id)
    {
        $venta = Venta::find($id);
        Venta::destroy($id);

        return redirect()->route('ventas.index')->with('message', 'Eliminado Satisfactoriamente!');
    }
}
