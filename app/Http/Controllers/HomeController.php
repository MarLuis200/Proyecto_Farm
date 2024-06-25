<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class HomeController extends Controller
{
    public function index()
    {
        
            $producto1 = Productos::find(1);
            $producto2 = Productos::find(2);
            $producto3 = Productos::find(3);
            $producto4 = Productos::find(4);
            $producto5 = Productos::find(5);
            
            
            // Pasar los productos a la vista 'home'
            return view('home', compact('producto1', 'producto2', 'producto3','producto4','producto5'));
    }
}
