<?php

namespace App\Http\Controllers;
use App\Models\Productos;

use Illuminate\Http\Request;

class GraneodinController extends Controller
{
   
    public function index()
    {
        $producto1 = Productos::find(1);
        return view('/home/destacados/graneodin',compact('producto1'));
    }
    
}

