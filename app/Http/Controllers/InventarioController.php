<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventario;
use Session;
use Redirect;
use App\Http\Requests\CreateInventario;
use App\Http\Requests\UpdateInventario;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
use DateTime;

class InventarioController extends Controller
{
    // Listar todos los productos en la vista principal
    public function index()
    {
        $inventario = Inventario::all();
        return view('admin.inventario.index', compact('inventario'));
    }

    // Mostrar la vista para crear un nuevo registro
    public function crear()
    {
        return view('admin.inventario.crear');
    }

    // Proceso de creación de un registro
    public function store(CreateInventario $request)
    {
        $inventario = new Inventario;

        // Recibo todos los datos del formulario de la vista 'crear.blade.php'
        $inventario->nombre = $request->nombre;
        $inventario->existencia = $request->existencia;
        $inventario->fecha_caducidad = $request->fecha_caducidad;
        $inventario->no_compra = $request->no_compra;
        $inventario->clave_proveedor = $request->clave_proveedor;

        // Almaceno la imagen en la carpeta publica especifica
        $inventario->img = $request->file('img')->store('/');

        // Guardamos la fecha de creación del registro
        $inventario->created_at = (new DateTime)->getTimestamp();

        // Inserto todos los datos en la tabla 'inventario'
        $inventario->save();

        // Hago una redirección a la vista principal con un mensaje
        return redirect('admin/inventario')->with('message', 'Guardado Satisfactoriamente!');
    }

    // Leer Registro por 'id' (Read)
    public function show($id)
    {
        $inventario = Inventario::findOrFail($id);
        return view('admin.inventario.detalles', compact('inventario'));
    }

    // Mostrar la vista para actualizar un registro
    public function actualizar($id)
    {
        $inventario = Inventario::findOrFail($id);
        return view('admin.inventario.actualizar', ['inventario' => $inventario]);
    }

    // Proceso de actualización de un registro
    public function update(UpdateInventario $request, $id)
    {
        $inventario = Inventario::findOrFail($id);
        $inventario->nombre = $request->nombre;
        $inventario->existencia = $request->existencia;
        $inventario->fecha_caducidad = $request->fecha_caducidad;
        $inventario->no_compra = $request->no_compra;
        $inventario->clave_proveedor = $request->clave_proveedor;

        // Recibo la imagen desde el formulario Actualizar
        if ($request->hasFile('img')) {
            // Elimino la imagen anterior si existe
            if ($inventario->img) {
                Storage::delete($inventario->img);
            }
            $inventario->img = $request->file('img')->store('/');
        }

        // Guardamos la fecha de actualización del registro
        $inventario->updated_at = (new DateTime)->getTimestamp();

        // Actualizo los datos en la tabla 'inventario'
        $inventario->save();

        // Muestro un mensaje y redirecciono a la vista principal
        Session::flash('message', 'Editado Satisfactoriamente!');
        return Redirect::to('admin/inventario');
    }

    // Eliminar un Registro
    public function eliminar($id)
    {
        // Indicamos el 'id' del registro que se va Eliminar
        $inventario = Inventario::find($id);

        // Elimino la imagen de la carpeta 'uploads', esto lo veremos más adelante
        $imagen = explode(",", $inventario->img);
        Storage::delete($imagen);

        // Elimino el registro de la tabla 'productos'
        Inventario::destroy($id);

        // Opcional: Si deseas guardar la fecha de eliminación de un registro, debes mantenerlo en
        // una tabla llamada por ejemplo 'productos_eliminados' y alli guardas su fecha de eliminación
        // $productos->deleted_at = (new DateTime)->getTimestamp();

        // Muestro un mensaje y redirecciono a la vista principal
        Session::flash('message', 'Eliminado Satisfactoriamente !');
        return Redirect::to('admin/inventario');
    }

}