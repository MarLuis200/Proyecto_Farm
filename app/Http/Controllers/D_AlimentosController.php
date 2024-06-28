<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class D_AlimentosController extends Controller
{
    public function index()
    {
        $producto13 = Productos::where('id_tipo', 13)->get();
        return view('/home/departamentos/alimentos', compact('producto13'));
    }
}
