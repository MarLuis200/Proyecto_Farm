<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Tipos;

class ComplementosController extends Controller
{
    public function index()
    {
        $tipoComplementos = Tipos::where('desc_tipos', 'complementos alimenticios')->first();

        if ($tipoComplementos) {
            
            $productos = Productos::where('id_tipo', $tipoComplementos->id)->get();
        } else {
            $productos = [];
        }
        return view('/home/vitaminas/complementos', compact('productos'));
    }
}
