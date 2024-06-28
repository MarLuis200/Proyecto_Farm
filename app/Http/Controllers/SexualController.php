<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Tipos;

class SexualController extends Controller
{
   
    public function index()
    {
        $tipoSexual= Tipos::where('desc_tipos', 'saludsexual')->first();

        if ($tipoSexual) {
            
            $productos = Productos::where('id_tipo', $tipoSexual->id)->get();
        } else {
            $productos = [];
        }
        return view('home/salud/saludsexual', compact('productos'));
    }
}
