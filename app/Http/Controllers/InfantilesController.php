<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Tipos;

class InfantilesController extends Controller
{
   
    public function index()
    {
        $tipoInfantiles = Tipos::where('desc_tipos', 'infantiles')->first();

        if ($tipoInfantiles) {
            
            $productos = Productos::where('id_tipo', $tipoInfantiles->id)->get();
        } else {
            $productos = [];
        }
        return view('/home/bebes/infantiles', compact('productos'));
    }
}
