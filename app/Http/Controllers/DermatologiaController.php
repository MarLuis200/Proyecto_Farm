<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class DermatologiaController extends Controller
{
   
    public function index()
    {
        $producto3 = Productos::where('id_tipo', 4)->get();
        return view('/home/salud/dermatologia', compact('producto3'));
    }
}
