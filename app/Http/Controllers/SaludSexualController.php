<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class SaludSexualController extends Controller
{
   
    public function index()
    {
        $producto4 = Productos::where('id_tipo', 3)->get();
        return view('/home/salud/saludsexual', compact('producto4'));
    }
}
