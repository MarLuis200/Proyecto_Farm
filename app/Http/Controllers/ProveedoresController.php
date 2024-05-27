<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedores; // Cambiado de Productos a Proveedores
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ItemCreateRequestProveedores; // Cambiado de ItemCreateRequest a ItemCreateRequestProveedores
use App\Http\Requests\ItemUpdateRequestProveedores; // Cambiado de ItemUpdateRequest a ItemUpdateRequestProveedores
use Illuminate\Support\Facades\Validator;
use DB;
use Input;
use Storage;
use DateTime; 

class ProveedoresController extends Controller
{
    
    // Listar todos los proveedores en la vista principal 
    public function index()
    {
        $proveedores = Proveedores::all(); // Cambiado de Productos a Proveedores
        return view('admin.proveedores.index', compact('proveedores')); 
    }

    // Crear un Registro (Create) 
    public function crear()
    {
        $proveedores = Proveedores::all(); // Cambiado de Productos a Proveedores
        return view('admin.proveedores.crear', compact('proveedores')); // Cambiado de productos a proveedores
    } 

    // Proceso de Creación de un Registro 
    public function store(ItemCreateRequestProveedores $request) // Cambiado de ItemCreateRequest a ItemCreateRequestProveedores
    {
        // Instancio al modelo Proveedores que hace llamado a la tabla 'proveedores' de la Base de Datos
        $proveedores = new Proveedores; // Cambiado de Productos a Proveedores

        // Recibo todos los datos del formulario de la vista 'crear.blade.php'
        $proveedores->nombre = $request->nombre;
        $proveedores->direccion = $request->direccion;
        $proveedores->telefono = $request->telefono;
        $proveedores->correo = $request->correo;

        // Almaceno la imagen en la carpeta pública especifica, esto lo veremos más adelante 
        $proveedores->img = $request->file('img')->store('/');
        
        // Guardo la fecha de creación del registro 
        $proveedores->created_at = (new DateTime)->getTimestamp();

        // Inserto todos los datos en mi tabla 'proveedores' 
        $proveedores->save();

        // Hago una redirección a la vista principal con un mensaje 
        return redirect('admin/proveedores')->with('message','Guardado Satisfactoriamente !'); 
    } 

    // Leer Registro por 'id' (Read) 
    public function show($id)
    {
        $proveedores = Proveedores::find($id); // Cambiado de Productos a Proveedores
        return view('admin.proveedores.detalles', compact('proveedores')); // Cambiado de productos a proveedores
    } 

    //  Actualizar un registro (Update)
    public function actualizar($id)
    {
        $proveedores = Proveedores::find($id); // Cambiado de Productos a Proveedores
        return view('admin.proveedores.actualizar',['proveedores'=>$proveedores]); // Cambiado de productos a proveedores
    } 

    
    // Proceso de Actualización de un Registro (Update)
    public function update(ItemUpdateRequestProveedores $request, $id) // Cambiado de ItemUpdateRequest a ItemUpdateRequestProveedores
    {        
        // Recibo todos los datos desde el formulario Actualizar
        $proveedores = Proveedores::find($id); // Cambiado de Productos a Proveedores
        $proveedores->nombre = $request->nombre;
        $proveedores->direccion = $request->direccion;
        $proveedores->telefono = $request->telefono;
        $proveedores->correo = $request->correo;

        // Recibo la imagen desde el formulario Actualizar
        if ($request->hasFile('img')) {
            $proveedores->img = $request->file('img')->store('/');
        }

        // Guardo la fecha de actualización del registro 
        $proveedores->updated_at = (new DateTime)->getTimestamp();
        
        // Actualizo los datos en la tabla 'proveedores'
        $proveedores->save();

        // Muestro un mensaje y redirecciono a la vista principal 
        Session::flash('message', 'Editado Satisfactoriamente !');
        return Redirect::to('admin/proveedores');
    }

    // Eliminar un Registro 
    public function eliminar($id)
    {
        // Indicamos el 'id' del registro que se va Eliminar
        $proveedores = Proveedores::find($id); // Cambiado de Productos a Proveedores

        // Elimino la imagen de la carpeta 'uploads', esto lo veremos más adelante
        $imagen = explode(",", $proveedores->img);
        Storage::delete($imagen);
            
        // Elimino el registro de la tabla 'proveedores' 
        Proveedores::destroy($id); // Cambiado de Productos a Proveedores

        // Opcional: Si deseas guardar la fecha de eliminación de un registro, debes mantenerlo en 
        // una tabla llamada por ejemplo 'proveedores_eliminados' y allí guardas su fecha de eliminación 
        // $proveedores->deleted_at = (new DateTime)->getTimestamp();
            
        // Muestro un mensaje y redirecciono a la vista principal 
        Session::flash('message', 'Eliminado Satisfactoriamente !');
        return Redirect::to('admin/proveedores');
    } 

}
