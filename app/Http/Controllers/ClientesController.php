<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
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

class ClientesController extends Controller
{
    public function index()
{
    $clientes = Clientes::all(); 
    $personas = Personas::all();

    return view('admin/clientes/index', [
        'clientes' => $clientes,
        'personas' => $personas
    ]);
}

    // Crear un Registro (Create)
    public function crear()
    {
        $personas = Personas::all();
        return view('admin/clientes/crear', compact('personas'));
    }

    // Proceso de Creación de un Registro
    public function store(ItemCreateRequest $request)
    {
        // Crear una nueva instancia de Cliente
        $cliente = new Clientes();
    
        // Asignar valores del formulario
        $cliente->persona_id = $request->persona_id;
        $cliente->nombre = $request->nombre;
        $cliente->apellido_paterno = $request->apellido_paterno;
        $cliente->apellido_materno = $request->apellido_materno;
        $cliente->direccion = $request->direccion;
        $cliente->telefono = $request->telefono;
        $cliente->correo = $request->correo;
        $cliente->img = $request->img;

    
        
    
        // Guardar el cliente en la base de datos
        $cliente->save();
    
        // Redireccionar a la vista principal de clientes con un mensaje
        return redirect('admin/clientes')->with('message', 'Guardado Satisfactoriamente !');
    }
    
    
    public function actualizar($id)
    {
        // Obtener el cliente por su ID
        $clientes = Clientes::find($id);

        if (!$clientes) {
            // Manejo del caso donde no se encuentra el cliente
            abort(404);
        }

        // Obtener todas las personas disponibles
        $personas = Personas::all();

        // Retornar la vista 'edit' con los datos del cliente y personas
        return view('admin/clientes/edit', [
            'clientes' => $clientes,
            'personas' => $personas,
        ]);
    }

    public function show($id)
    {
        try {
          
            $clientes = Clientes::findOrFail($id);
            return view('admin/clientes/show', compact('clientes'));
        } catch (ModelNotFoundException $e) 
        {
            abort(404);
        }
    }


    public function update(ItemUpdateRequest $request, $id)
    {
        $clientes = Clientes::find($id);
        $clientes->nombre = $request->nombre;
        $clientes->apellido_paterno = $request->apellido_paterno;
        $clientes->apellido_materno = $request->apellido_materno;
        $clientes->direccion = $request->direccion;
        $clientes->telefono = $request->telefono;
        $clientes->correo = $request->correo;
        $clientes->img = $request->img;

        // Guardamos la fecha de actualización del registro
        $clientes->updated_at = (new DateTime)->getTimestamp();

        // Actualizo los datos en la tabla 'clientes'
        $clientes->save();

        // Muestro un mensaje y redirecciono a la vista principal
        Session::flash('message', 'Editado Satisfactoriamente !');
        return Redirect::to('admin/clientes');
    }

    // Eliminar un Registro
    public function eliminar($id)
    {
        $clientes = Clientes::find($id);

        Clientes::destroy($id);

        Session::flash('message', 'Eliminado Satisfactoriamente !');
        return Redirect::to('admin/clientes');
    }

    // Método para obtener los datos de una persona por id (para AJAX)
    public function getPersona($id)
    {
        $persona = Personas::find($id);
        return response()->json($persona);
    }
}
