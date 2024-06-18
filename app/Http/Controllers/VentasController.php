<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ventas; // Importa el modelo de Ventas
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\ItemCreateRequestVentas;
use App\Http\Requests\ItemUpdateRequestVentas;
use DB;
use Input;
use Storage;
use DateTime;


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
            'id_venta' => 'required|unique:ventas|max:255',
            'id_producto' => 'required',
            'cantidad' => 'required',
            'total' => 'required',
        ]);

        // Si la validación falla, redireccionar de nuevo al formulario de creación con errores
        if ($validator->fails()) {
            return Redirect::back()
                ->withErrors($validator)
                ->withInput();
        }

        // Crear una nueva venta con los datos proporcionados
        $venta = new Ventas;
        $venta->id_venta = $request->id_venta;
        $venta->id_producto = $request->id_producto;
        $venta->cantidad = $request->cantidad;
        $venta->total = $request->total;
        $venta->save();

        // Mostrar un mensaje de éxito y redireccionar a la vista principal de ventas
        Session::flash('message', 'Venta creada satisfactoriamente.');
        return Redirect::to('admin/ventas');
    }

    // Leer Registro por 'id' (Read) 
    public function show($id)
    {
        $venta = Ventas::find($id);
        return view('admin.ventas.detalles', compact('venta'));
    }

    // Actualizar un registro (Update)
    public function actualizar($id)
    {
        $venta = Ventas::find($id); // Buscar la venta por su ID
        return view('admin.ventas.actualizar', ['venta' => $venta]); // Mostrar el formulario para actualizar la venta
    }

    // Proceso de Actualización de un Registro (Update)
    public function update(ItemUpdateRequestVentas $request, $id)
    {
        // Validar los datos de la solicitud
        $venta= Ventas::find($id);
        $venta = new Ventas;
        $venta->id_venta = $request->id_venta;
        $venta->id_producto = $request->id_producto;
        $venta->cantidad = $request->cantidad;
        $venta->total = $request->total;

        // Guardamos la fecha de actualización del registro
        $venta->updated_at = (new DateTime)->getTimestamp();

        // Actualizo los datos en la tabla 'productos'
        $venta->save();

        // Muestro un mensaje y redirecciono a la vista principal
        Session::flash('message', 'Editado Satisfactoriamente !');
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
