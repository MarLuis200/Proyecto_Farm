<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleados;
use App\Models\Personas;
use App\Models\Puestos;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateEmpleados;
use App\Http\Requests\UpdateEmpleados;
use Illuminate\Support\Facades\Validator;
use DB;
use Input;
use Storage;
use DateTime;

class EmpleadosController extends Controller
{

    // Listar todos los empleados en la vista principal
    public function index()
    {
        $personas = Personas::all();
        $puestos = Puestos::all();

        $empleados = Empleados::join("personas", "empleados.id_persona", "=", "personas.id")
            ->join("puestos", "empleados.id_puesto", "=", "puestos.id")
            ->select("empleados.id", "personas.nombre", "personas.apellido_paterno", "personas.apellido_materno", "puestos.descripcion")
            ->get();

        return view('admin/empleados/index', compact('empleados', 'personas', 'puestos'));
    }

    // Crear un Registro (Create)
    public function crear()
    {
        $personas = Personas::all();
        $puestos = Puestos::all();
        return view('admin/empleados/crear', compact('personas', 'puestos'));
    }

    // Proceso de Creación de un Registro
    public function store(CreateEmpleados $request)
    {
        $empleados = new Empleados;

        $empleados->id_persona = $request->id_persona;
        $empleados->id_puesto = $request->id_puesto;
        $empleados->created_at = (new DateTime)->getTimestamp();
        $empleados->save();

        return redirect('admin/empleados')->with('message', 'Guardado Satisfactoriamente !');
    }

    // Leer Registro por 'id' (Read)
    public function show($id)
    {
        $empleados = Empleados::find($id);
        
        return view('admin/empleados/detalles', compact('empleados'));
    }

    //  Actualizar un registro (Update)
    public function actualizar($id)
    {
        $empleados = Empleados::find($id);
        $personas = Personas::all();
        $puestos = Puestos::all();
        return view('admin/empleados/actualizar', compact('empleados', 'personas', 'puestos'));
    } 

    // Proceso de Actualización de un Registro (Update)
    public function update(UpdateEmpleados $request, $id)
    {
        $empleados = Empleados::find($id);

        if (!$empleados) {
            return redirect()->back()->with('error', 'Empleado no encontrado.');
        }
        
        $personas = Personas::find($request->id_persona);
        if (!$personas) {
            return redirect()->back()->with('error', 'Persona no encontrada.');
        }

        $empleados->id_persona = $request->id_persona;
        $empleados->id_puesto = $request->id_puesto;
        $empleados->save();
        
        return redirect()->route('admin.empleados')->with('message', 'Actualizado Satisfactoriamente!');
    }

    // Eliminar un Registro
    public function eliminar($id)
    {
        $empleados = Empleados::find($id);
        Empleados::destroy($id);

        Session::flash('message', 'Eliminado Satisfactoriamente !');
        return Redirect::to('admin/empleados');
    }
}
