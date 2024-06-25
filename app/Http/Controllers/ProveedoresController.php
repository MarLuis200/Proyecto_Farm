<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;
use App\Models\Personas;
use Illuminate\Http\Request;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemUpdateRequest;
use App\Http\Requests\ItemCreateRequest;
use Illuminate\Support\Facades\Validator;
use Storage;
use DateTime;

class ProveedoresController extends Controller
{
    public function index()
{
    $proveedores = Proveedores::all(); 
    $personas = Personas::all();

    return view('admin/proveedores/index', [
        'proveedores' => $proveedores,
        'personas' => $personas
    ]);
}

    // Crear un Registro (Create)
    public function crear()
    {
        $personas = Personas::all();
        return view('admin/proveedores/crear', compact('personas'));
    }

    
    public function store(ItemCreateRequest $request)
{
    // Crear una nueva instancia de Cliente
    $proveedores = new Proveedores();

    // Asignar valores del formulario
    $proveedores->persona_id = $request->persona_id;
    $proveedores->nombre = $request->nombre;
    $proveedores->apellido_paterno = $request->apellido_paterno;
    $proveedores->apellido_materno = $request->apellido_materno;
    $proveedores->direccion = $request->direccion;
    $proveedores->telefono = $request->telefono;
    $proveedores->correo = $request->correo;

    // Obtener la información de la persona seleccionada
    $persona = Personas::find($request->persona_id);

    if ($persona) {
        // Asignar la imagen de la persona al cliente
        $proveedores->img = $persona->img;
    }

    // Guardar el cliente en la base de datos
    $proveedores->save();

    // Redireccionar a la vista principal de clientes con un mensaje
    return redirect('admin/proveedores')->with('message', 'Guardado Satisfactoriamente !');
}

    
    
    public function actualizar($id)
    {
        // Obtener el cliente por su ID
        $proveedores = Proveedores::find($id);

        if (!$proveedores) {
            // Manejo del caso donde no se encuentra el cliente
            abort(404);
        }

        // Obtener todas las personas disponibles
        $personas = Personas::all();

        // Retornar la vista 'edit' con los datos del cliente y personas
        return view('admin/proveedores/actualizar', [
            'proveedores' => $proveedores,
            'personas' => $personas,
        ]);
    }

    public function show($id)
    {
        try {
          
            $proveedores = Proveedores::findOrFail($id);
            return view('admin/proveedores/detalles', compact('proveedores'));
        } catch (ModelNotFoundException $e) 
        {
            abort(404);
        }
    }


    public function update(ItemUpdateRequest $request, $id)
    {
        $proveedores = Proveedores::find($id);
        $proveedores->nombre = $request->nombre;
        $proveedores->apellido_paterno = $request->apellido_paterno;
        $proveedores->apellido_materno = $request->apellido_materno;
        $proveedores->direccion = $request->direccion;
        $proveedores->telefono = $request->telefono;
        $proveedores->correo = $request->correo;
        $proveedores->img = $request->img;

        // Guardamos la fecha de actualización del registro
        $proveedores->updated_at = (new DateTime)->getTimestamp();

        // Actualizo los datos en la tabla 'clientes'
        $proveedores->save();

        // Muestro un mensaje y redirecciono a la vista principal
        Session::flash('message', 'Editado Satisfactoriamente !');
        return Redirect::to('admin/proveedores');
    }

    // Eliminar un Registro
    public function eliminar($id)
    {
        $proveedores = Proveedores::find($id);

        Proveedores::destroy($id);

        Session::flash('message', 'Eliminado Satisfactoriamente !');
        return Redirect::to('admin/proveedores');
    }

    // Método para obtener los datos de una persona por id (para AJAX)
    public function getPersona($id)
    {
        $persona = Personas::find($id);
        return response()->json($persona);
    }
}
