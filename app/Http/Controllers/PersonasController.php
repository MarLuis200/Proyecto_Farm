<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemUpdateRequest;
use App\Http\Requests\ItemCreateRequest;
use Illuminate\Support\Facades\Validator;
use DB;
use Input;
use Storage;
use DateTime;

class PersonasController extends Controller
{

    // Listar todos los productos en la vista principal
    public function index()
    {
        $personas = Personas::all();
        return view('admin.personas.index', compact('personas'));
    }

    // Crear un Registro (Create)
    public function crear()
    {
        $personas = Personas::all();
        return view('admin.personas.crear', compact('personas'));
    }

    // Proceso de Creación de un Registro
    public function store(ItemCreateRequest $request)
    {
        // Instancio al modelo Productos que hace llamado a la tabla 'productos' de la Base de Datos
        $personas = new Personas();

        // Recibo todos los datos del formulario de la vista 'crear.blade.php'
        $personas->nombre = $request->nombre;
        $personas->apellido_paterno = $request->apellido_paterno;
        $personas->apellido_materno = $request->apellido_materno;
        $personas->direccion = $request->direccion;
        $personas->telefono = $request->telefono;
        $personas->correo = $request->correo;

        // Almacenamos la imagen en la carpeta publica especifica, esto lo veremos más adelante
        $personas->img = $request->file('img')->store('/');

        // Guardamos la fecha de creación del registro
        $personas->created_at = (new DateTime)->getTimestamp();

        // Inserto todos los datos en mi tabla 'productos'
        $personas->save();

        // Hago una redirección a la vista principal con un mensaje
        return redirect('admin/personas')->with('message','Guardado Satisfactoriamente !');
    }

    // Leer Registro por 'id' (Read)
    public function show($id)
    {
        $personas = Personas::find($id);
        return view('admin.personas.detalles', compact('personas'));
    }

    //  Actualizar un registro (Update)
    public function actualizar($id)
    {
        $personas = Personas::find($id);
        return view('admin/personas.actualizar',['personas'=>$personas]);
    }


    // Proceso de Actualización de un Registro (Update)
    public function update(ItemUpdateRequest $request, $id)
    {
        // Recibo todos los datos desde el formulario Actualizar
        $personas= Personas::find($id);
        $personas->nombre = $request->nombre;
        $personas->apellido_paterno = $request->apellido_paterno;
        $personas->apellido_materno = $request->apellido_materno;
        $personas->direccion= $request->direccion;
        $personas->telefono=$request->telefono;
        $personas->correo = $request->correo;


        // Recibo la imagen desde el formulario Actualizar
        if ($request->hasFile('img')) {
            $personas->img = $request->file('img')->store('/');
        }

        // Guardamos la fecha de actualización del registro
        $personas->updated_at = (new DateTime)->getTimestamp();

        // Actualizo los datos en la tabla 'productos'
        $personas->save();

        // Muestro un mensaje y redirecciono a la vista principal
        Session::flash('message', 'Editado Satisfactoriamente !');
        return Redirect::to('admin/personas');
    }

    // Eliminar un Registro
    public function eliminar($id)
    {
        // Indicamos el 'id' del registro que se va Eliminar
        $personas = Personas::find($id);

        // Elimino la imagen de la carpeta 'uploads', esto lo veremos más adelante
        $imagen = explode(",", $personas->img);
        Storage::delete($imagen);

        // Elimino el registro de la tabla 'productos'
        Personas::destroy($id);

        // Opcional: Si deseas guardar la fecha de eliminación de un registro, debes mantenerlo en
        // una tabla llamada por ejemplo 'productos_eliminados' y alli guardas su fecha de eliminación
        // $productos->deleted_at = (new DateTime)->getTimestamp();

        // Muestro un mensaje y redirecciono a la vista principal
        Session::flash('message', 'Eliminado Satisfactoriamente !');
        return Redirect::to('admin/personas');
    }

}


