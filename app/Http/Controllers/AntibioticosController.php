<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Tipos;

class AntibioticosController extends Controller
{
   
    public function index()
    {
        $tipoAntibioticos = Tipos::where('desc_tipos', 'antibioticos')->first();

        if ($tipoAntibioticos) {
            
            $productos = Productos::where('id_tipo', $tipoAntibioticos->id)->get();
        } else {
            $productos = [];
        }
        return view('/home/salud/antibioticos', compact('productos'));
    }
}
