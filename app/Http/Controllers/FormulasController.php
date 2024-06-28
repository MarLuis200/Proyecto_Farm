<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Tipos;

class FormulasController extends Controller
{
   
    public function index()
    {
        $tipoFormula= Tipos::where('desc_tipos', 'formulas infantiles')->first();

        if ($tipoFormula) {
            
            $productos = Productos::where('id_tipo', $tipoFormula->id)->get();
        } else {
            $productos = [];
        }
        return view('/home/bebes/formulas', compact('productos'));
    }
}
