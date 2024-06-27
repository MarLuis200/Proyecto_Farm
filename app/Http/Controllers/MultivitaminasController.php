<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class MultivitaminasController extends Controller
{
    public function index()
    {
        $producto9 = Productos::where('id_tipo', 9)->get();
        return view('/home/vitaminas/multivitaminas', compact('producto9'));
    }
}
