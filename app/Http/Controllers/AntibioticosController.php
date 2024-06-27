<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class AntibioticosController extends Controller
{
   
    public function index()
    {
        $producto2 = Productos::where('id_tipo', 2)->get();
        return view('/home/salud/antibioticos', compact('producto2'));
    }
}
