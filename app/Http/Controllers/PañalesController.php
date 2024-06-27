<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class PañalesController extends Controller
{
    public function index()
    {
        $producto5 = Productos::where('id_tipo', 5)->get();
        return view('/home/bebes/pañales',compact('producto5'));
    }
}
