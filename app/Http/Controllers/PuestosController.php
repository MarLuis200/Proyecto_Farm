<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Puestos;
use Session;
use Redirect;
use App\Http\Requests\CreatePuestos;
use App\Http\Requests\UpdatePuestos;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use DateTime;

class PuestosController extends Controller
{
    // Listar todos los productos en la vista principal
    public function index()
    {
        $puestos = Puestos::all();
        return view('admin.puestos.index', compact('puestos'));
    }

    // Mostrar la vista para crear un nuevo registro
    public function crear()
    {
        return view('admin.puestos.crear');
    }

    // Proceso de creación de un registro
    public function store(CreatePuestos $request)
    {
        $puestos = new Puestos;

        // Recibo todos los datos del formulario de la vista 'crear.blade.php'
        $puestos->id = $request->id;
        $puestos->descripcion = $request->descripcion;

        // Guardamos la fecha de creación del registro
        $puestos->created_at = (new DateTime)->getTimestamp();

        // Inserto todos los datos en la tabla 'inventario'
        $puestos->save();

        // Hago una redirección a la vista principal con un mensaje
        return redirect('admin/puestos')->with('message', 'Guardado Satisfactoriamente!');
    }

    // Leer Registro por 'id' (Read)
    public function show($id)
    {
        $puestos = Puestos::findOrFail($id);
        return view('admin.puestos.detalles', compact('puestos'));
    }

    // Mostrar la vista para actualizar un registro
    public function actualizar($id)
    {
        $puestos = Puestos::findOrFail($id);
        return view('admin.puestos.actualizar', ['puestos' => $puestos]);
    }

    // Proceso de actualización de un registro
    public function update(UpdatePuestos $request, $id)
    {
        $puestos = Puestos::findOrFail($id);
        $puestos->descripcion = $request->descripcion;
       


        // Guardamos la fecha de actualización del registro
        $puestos->updated_at = (new DateTime)->getTimestamp();

        // Actualizo los datos en la tabla 'puestos'
        $puestos->save();

        // Muestro un mensaje y redirecciono a la vista principal
        Session::flash('message', 'Editado Satisfactoriamente!');
        return Redirect::to('admin/puestos');
    }

    // Eliminar un Registro
    public function eliminar($id)
    {
        // Indicamos el 'id' del registro que se va Eliminar
        $puestos= Puestos::find($id);

        
        Puestos::destroy($id);

        

        // Muestro un mensaje y redirecciono a la vista principal
        Session::flash('message', 'Eliminado Satisfactoriamente !');
        return Redirect::to('admin/puestos');
    }

}