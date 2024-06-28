<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Tipos;

class FormulasController extends Controller
{
   
    public function index()
    {
        $tipoFormulas = Tipos::where('desc_tipos', 'formulas')->first();

        if ($tipoFormulas) {
            
            $productos = Productos::where('id_tipo', $tipoAlimentos->id)->get();
        } else {
            $productos = [];
        }
        return view('/home/bebes/formulas', compact('productos'));
    }
}
