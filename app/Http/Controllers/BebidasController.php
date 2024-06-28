<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Tipos;

class BebidasController extends Controller
{
   
    public function index()
    {
        $tipoBebidas = Tipos::where('desc_tipos', 'bebidas')->first();

        if ($tipoBebidas) {
            
            $productos = Productos::where('id_tipo', $tipoBebidas->id)->get();
        } else {
            $productos = [];
        }
        return view('/home/departamentos/bebidas', compact('productos'));
    }
}
