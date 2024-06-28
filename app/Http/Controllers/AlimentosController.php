<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Tipos;

class AlimentosController extends Controller
{
   
    public function index()
    {
        $tipoAlimentos = Tipos::where('desc_tipos', 'alimentos')->first();

        if ($tipoAlimentos) {
            
            $productos = Productos::where('id_tipo', $tipoAlimentos->id)->get();
        } else {
            $productos = [];
        }
        return view('/home/departamentos/alimentos', compact('productos'));
    }
}
