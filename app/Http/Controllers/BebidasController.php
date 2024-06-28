<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class BebidasController extends Controller
{
    public function index()
    {
        $producto14 = Productos::where('id_tipo', 14)->get();
        return view('/home/departamentos/bebidas', compact('producto14'));
    }
}
