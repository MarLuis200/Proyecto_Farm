<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Tipos;


class DermatologiaController extends Controller
{
   
    public function index()
    {
        $tipoDermatologia = Tipos::where('desc_tipos', 'dermatologia')->first();

        if ($tipoDermatologia) {
            
            $productos = Productos::where('id_tipo', $tipoDermatologia->id)->get();
        } else {
            $productos = [];
        }
        return view('/home/salud/dermatologia', compact('productos'));
    }
}
