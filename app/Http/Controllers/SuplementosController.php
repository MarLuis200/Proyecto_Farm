<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Tipos;

class SuplementosController extends Controller
{
    public function index()
    {
        $tipoSuplementos = Tipos::where('desc_tipos', 'suplementos')->first();

        if ($tipoSuplementos) {
            
            $productos = Productos::where('id_tipo', $tipoSuplementos->id)->get();
        } else {
            $productos = [];
        }
        return view('/home/vitaminas/suplementos', compact('productos'));
    }
}
