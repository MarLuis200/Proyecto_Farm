<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class ComplementosController extends Controller
{
    public function index()
    {
        $producto8 = Productos::where('id_tipo', 8)->get();
        return view('/home/vitaminas/complementos', compact('producto8'));
    }
}
