<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class DolorController extends Controller
{
   
    public function index()
    {
        $producto2 = Productos::find(2);
        return view('/home/salud/dolor',compact('producto2'));
    }
}
