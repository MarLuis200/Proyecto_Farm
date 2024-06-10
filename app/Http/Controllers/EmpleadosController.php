<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleados;
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

    // Listar todos los productos en la vista principal
    public function index()
    {
        $empleados = Empleados::all();
        return view('admin.empleados.index', compact('empleados'));
    }

    // Crear un Registro (Create)
    public function crear()
    {
        $empleados = Empleados::all();
        return view('admin.empleados.crear', compact('empleados'));
    }

    // Proceso de Creación de un Registro
    public function store(CreateEmpleados $request)
    {
        // Instancio al modelo Productos que hace llamado a la tabla 'productos' de la Base de Datos
        $empleados = new Empleados;

        // Recibo todos los datos del formulario de la vista 'crear.blade.php'
        $empleados->id_empleado = $request->id_empleado;
        $empleados->id_persona = $request->id_persona;
        $empleados->id_puesto = $request->id_puesto;
        

        // Guardamos la fecha de creación del registro
        $empleados->created_at = (new DateTime)->getTimestamp();

        // Inserto todos los datos en mi tabla 'productos'
        $empleados->save();

        // Hago una redirección a la vista principal con un mensaje
        return redirect('admin/empleados')->with('message','Guardado Satisfactoriamente !');
    }

    // Leer Registro por 'id' (Read)
    public function show($id)
    {
        $empleados = Empleados::find($id);
        return view('admin.empleados.detalles', compact('empleados'));
    }

    //  Actualizar un registro (Update)
    public function actualizar($id)
    {
        $empleados = Empleados::find($id);
        return view('admin.empleados.actualizar',['empleados'=>$empleados]);
    }
    
    // Proceso de Actualización de un Registro (Update)
    public function update(UpdateEmpleados $request, $id)
    {
        $empleados= Empleados::find($id);
        $empleados->id_empleado = $request->id_empleado;
        $empleados->id_persona = $request->id_persona;
        $empleados->id_puesto = $request->id_puesto;
       
        // Guardamos la fecha de actualización del registro
        $empleados->updated_at = (new DateTime)->getTimestamp();

        // Actualizo los datos en la tabla 'productos'
        $empleados->save();

        // Muestro un mensaje y redirecciono a la vista principal
        Session::flash('message', 'Editado Satisfactoriamente !');
        return Redirect::to('admin/empleados');
    }

    // Eliminar un Registro
    public function eliminar($id)
    {
        // Indicamos el 'id' del registro que se va Eliminar
        $empleados = Empleados::find($id);


        // Elimino el registro de la tabla 'productos'
        Empleados::destroy($id);

        // Opcional: Si deseas guardar la fecha de eliminación de un registro, debes mantenerlo en
        // una tabla llamada por ejemplo 'productos_eliminados' y alli guardas su fecha de eliminación
        // $productos->deleted_at = (new DateTime)->getTimestamp();

        // Muestro un mensaje y redirecciono a la vista principal
        Session::flash('message', 'Eliminado Satisfactoriamente !');
        return Redirect::to('admin/empleados');
    }

}


