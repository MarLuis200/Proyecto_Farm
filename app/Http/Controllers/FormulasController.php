<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Tipos;

class FormulasController extends Controller
{
   
    public function index()
    {
        // Obtener el tipo "dolor" según la descripción desde la tabla "tipos"
        $tipoFormulas = Tipos::where('desc_tipos', 'formulas infantiles')->first();

        if ($tipoFormulas) {
            // Obtener todos los productos que tienen este tipo de dolor
            $productos = Productos::where('id_tipo', $tipoFormulas->id)->get();
        } else {
            $productos = []; // O manejar el caso si no se encuentra el tipo "dolor"
        return view('/home/bebes/formulas', compact('productos'));
        }
    }
}