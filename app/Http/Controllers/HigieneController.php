<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Tipos;

class HigieneController extends Controller
{
   
    public function index()
    {
        $tipoHigiene = Tipos::where('desc_tipos', 'higiene')->first();

        if ($tipoHigiene) {
            
            $productos = Productos::where('id_tipo', $tipoHigiene->id)->get();
        } else {
            $productos = [];
        }
        return view('/home/departamentos/higiene', compact('productos'));
    }
}
