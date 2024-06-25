<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;
use App\Models\Productos;
use Session;
use Redirect;
use App\Http\Requests\CreateInventario;
use App\Http\Requests\UpdateInventario;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use DateTime;

class InventarioController extends Controller
{
    public function index()
    {
        $productos = Productos::all();
        $inventario = Inventario::join("productos", "inventario.producto_id", "=", "productos.id")
            ->select("inventario.stock", "inventario.fecha_caducidad", "inventario.id", "productos.nombre", "productos.precio")
            ->get();
        return view('admin.inventario.index', compact('inventario', 'productos'));
    }

    public function crear()
    {
        $productos = Productos::all();
        return view('admin.inventario.crear', compact('productos'));
    }

    public function store(CreateInventario $request)
{
    $producto = Productos::find($request->producto_id);
    if (!$producto) {
        return redirect()->back()->with('error', 'Producto no encontrado.');
    }

    $inventario = new Inventario();
    $inventario->producto_id = $request->producto_id;
    $inventario->stock = $request->stock;
    $inventario->fecha_caducidad = $request->fecha_caducidad;
    $inventario->precio = $request->precio;

    $producto = Productos::find($request->producto_id);

    if ($producto) {
        // Asignar la imagen de la persona al cliente
        $inventario->img = $producto->img;
    }

    $inventario->save();
    return redirect()->route('admin.inventario')->with('message', 'Guardado Satisfactoriamente!');
}


    public function show($id)
    {
        try {
            $inventario = Inventario::findOrFail($id);
            return view('admin.inventario.detalles', compact('inventario'));
        } catch (ModelNotFoundException $e) {
            abort(404);
        }
    }

    public function actualizar($id)
    {
        $inventario = Inventario::findOrFail($id);
        $productos = Productos::all();
        return view('admin.inventario.actualizar', compact('inventario', 'productos'));
    }

    
    public function update(UpdateInventario $request, $id)
    {
        $inventario = Inventario::findOrFail($id);
        $inventario->producto_id = $request->producto_id;
        $inventario->stock = $request->stock;
        $inventario->fecha_caducidad = $request->fecha_caducidad;
        $inventario->precio = $request->precio;

        
        if ($request->hasFile('img')) {
            
            if ($inventario->img) {
                Storage::delete($inventario->img);
            }
            $inventario->img = $request->file('img')->store('/');
        }

        $inventario->updated_at = (new DateTime)->getTimestamp();
        $inventario->save();

        Session::flash('message', 'Editado Satisfactoriamente!');
        return Redirect::to('admin/inventario');
    }

    public function eliminar($id)
    {
        $inventario = Inventario::find($id);
        Inventario::destroy($id);

        return redirect()->route('admin.inventario')->with('message', 'Eliminado Satisfactoriamente!');
    }
}
