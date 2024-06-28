<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class AlimentosController extends Controller
{
    public function index()
    {
        $producto12 = Productos::where('id_tipo', 12)->get();
        return view('/home/bebes/alimentos', compact('producto12'));
    }
}
