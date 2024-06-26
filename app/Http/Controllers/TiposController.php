<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tipos;
use Session;
use Redirect;
use App\Http\Requests\CreateTipos;
use App\Http\Requests\UpdateTipos;

class TiposController extends Controller
{
    // Listar todos los productos en la vista principal
    public function index()
    {
        $tipos = Tipos::all();
        return view('admin.tipos.index', compact('tipos'));
    }

    // Mostrar la vista para crear un nuevo registro
    public function crear()
    {
        return view('admin.tipos.crear');
    }

    // Proceso de creación de un registro
    public function store(CreateTipos $request)
    {
        $tipos = new Tipos;
        $tipos->desc_tipos = $request->desc_tipos;
        $tipos->save();

        return redirect('admin/tipos')->with('message', 'Guardado Satisfactoriamente!');
    }

    // Leer Registro por 'id' (Read)
    public function show($id)
    {
        $tipos = Tipos::findOrFail($id);
        return view('admin.tipos.detalles', compact('tipos'));
    }

    // Mostrar la vista para actualizar un registro
    public function actualizar($id)
    {
        $tipos = Tipos::findOrFail($id);
        return view('admin.tipos.actualizar', ['tipos' => $tipos]);
    }

    // Proceso de actualización de un registro
    public function update(UpdateTipos $request, $id)
    {
        $tipos = Tipos::findOrFail($id);
        $tipos->desc_tipos = $request->desc_tipos;
        $tipos->save();

        Session::flash('message', 'Editado Satisfactoriamente!');
        return Redirect::to('admin/tipos');
    }

    // Eliminar un Registro
    public function eliminar($id)
    {
        $tipos = Tipos::findOrFail($id);
        $tipos->delete();

        Session::flash('message', 'Eliminado Satisfactoriamente!');
        return Redirect::to('admin/tipos');
    }
}
