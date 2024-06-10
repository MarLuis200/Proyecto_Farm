<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ventas; // Importa el modelo de Ventas
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use DateTime;
use App\Http\Requests\ItemCreateRequestVentas;
use App\Http\Requests\ItemUpdateRequestVentas;

class VentasController extends Controller
{
    // Listar todas las ventas en la vista principal 
    public function index()
    {
        $ventas = Ventas::all(); // Obtener todas las ventas
        return view('admin.ventas.index', compact('ventas')); // Mostrar la vista con todas las ventas
    }

    // Crear un Registro (Create) 
    public function crear()
    {
        return view('admin.ventas.crear'); // Mostrar el formulario para crear una nueva venta
    }

    // Proceso de Creación de un Registro 
    public function store(Request $request)
    {
        // Validar los datos de la solicitud
        $validator = Validator::make($request->all(), [
            'fecha_venta' => 'required|unique:ventas|max:255',
            'id_proveedor' => 'required',
            'descripcion' => 'required',
            'cantidad' => 'required',
            'precio' => 'required',
            'id_producto' => 'required',
        ]);

        // Si la validación falla, redireccionar de nuevo al formulario de creación con errores
        if ($validator->fails()) {
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }

        // Crear una nueva venta con los datos proporcionados
        $venta = new Ventas;
        $venta->fecha_venta = $request->fecha_venta;
        $venta->id_proveedor = $request->id_proveedor;
        $venta->descripcion = $request->descripcion;
        $venta->cantidad = $request->cantidad;
        $venta->precio = $request->precio;
        $venta->id_producto = $request->id_producto;
        $venta->save();

        // Mostrar un mensaje de éxito y redireccionar a la vista principal de ventas
        Session::flash('message', 'Venta creada satisfactoriamente.');
        return Redirect::to('admin/ventas');
    }

    // Leer Registro por 'id' (Read) 
    public function show($id)
    {
        $venta = Ventas::find($id); // Buscar la venta por su ID
        return view('admin.ventas.detalles', compact('venta')); // Mostrar los detalles de la venta
    }

    // Actualizar un registro (Update)
    public function actualizar($id)
    {
        $venta = Ventas::find($id); // Buscar la venta por su ID
        return view('admin.ventas.actualizar', ['venta' => $venta]); // Mostrar el formulario para actualizar la venta
    }

    // Proceso de Actualización de un Registro (Update)
    public function update(Request $request, $id)
    {
        // Validar los datos de la solicitud
        $validator = Validator::make($request->all(), [
            'fecha_venta' => 'required|unique:ventas|max:255',
            'id_proveedor' => 'required',
            'descripcion' => 'required',
            'cantidad' => 'required',
            'precio' => 'required',
            'id_producto' => 'required',
        ]);

        // Si la validación falla, redireccionar de nuevo al formulario de actualización con errores
        if ($validator->fails()) {
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }

        // Actualizar la venta con los datos proporcionados
        $venta = Ventas::find($id);
        $venta->fecha_venta = $request->fecha_venta;
        $venta->id_proveedor = $request->id_proveedor;
        $venta->descripcion = $request->descripcion;
        $venta->cantidad = $request->cantidad;
        $venta->precio = $request->precio;
        $venta->id_producto = $request->id_producto;
        $venta->save();

        // Mostrar un mensaje de éxito y redireccionar a la vista principal de ventas
        Session::flash('message', 'Venta actualizada satisfactoriamente.');
        return Redirect::to('admin/ventas');
    }

    // Eliminar un Registro 
    public function eliminar($id)
    {
        // Indicamos el 'id' del registro que se va Eliminar
        $venta = Ventas::find($id); // Buscar la venta por su ID
            
        // Elimino el registro de la tabla 'ventas' 
        Ventas::destroy($id); // Eliminar la venta por su ID

        // Mostrar un mensaje de éxito y redireccionar a la vista principal de ventas 
        Session::flash('message', 'Venta eliminada satisfactoriamente.');
        return Redirect::to('admin/ventas');
    }
}
