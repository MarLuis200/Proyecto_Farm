<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Tipos;

class PañalesController extends Controller
{
    public function index()
    {
        $tipoPañales = Tipos::where('desc_tipos', 'pañales')->first();

        if ($tipoPañales) {
            
            $productos = Productos::where('id_tipo', $tipoPañales->id)->get();
        } else {
            $productos = [];
        }
        return view('/home/bebes/pañales',compact('productos'));
    }
}
