<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class FormulasController extends Controller
{
    public function index()
    {
        $producto11 = Productos::where('id_tipo', 11)->get();
        return view('/home/bebes/formulas', compact('producto11'));
    }
}
