<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class DolorController extends Controller
{
   
    public function index()
    {
        $producto1 = Productos::where('id_tipo', 1)->get();
        
        return view('/home/salud/dolor', compact('producto1'));
    }
}
