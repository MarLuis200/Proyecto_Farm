<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class SuplementosController extends Controller
{
    public function index()
    {
        $producto10 = Productos::where('id_tipo', 10)->get();
        return view('/home/vitaminas/suplementos', compact('producto10'));
    }
}
