<?php

namespace App\Http\Controllers;
use App\Models\Productos;

use Illuminate\Http\Request;

class GraneodinController extends Controller
{
   
    public function index()
    {
        $producto3 = Productos::find(3);
        return view('/home/destacados/graneodin',compact('producto3'));
    }
}

