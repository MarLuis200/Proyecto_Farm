<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class D_AlimentosController extends Controller
{
    public function index()
    {
        $productos = Productos::where('id_tipo')->get();
        return view('/home/departamentos/alimentos', compact('productos'));
    }
}
