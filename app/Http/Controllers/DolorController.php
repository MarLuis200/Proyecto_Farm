<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Tipos;

class DolorController extends Controller
{
    public function index()
    {
        // Obtener el tipo "dolor" según la descripción desde la tabla "tipos"
        $tipoDolor = Tipos::where('desc_tipos', 'dolor')->first();

        if ($tipoDolor) {
            // Obtener todos los productos que tienen este tipo de dolor
            $productos = Productos::where('id_tipo', $tipoDolor->id)->get();
        } else {
            $productos = []; // O manejar el caso si no se encuentra el tipo "dolor"
        }
        
        return view('home.salud.dolor', compact('productos'));
    }
}
