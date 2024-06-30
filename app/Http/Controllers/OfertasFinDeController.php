<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class OfertasFinDeController extends Controller
{
   
    public function index()
    {
        $recommendedProducts = Productos::inRandomOrder()->take(9)->get();
        return view('/home/ofertas/fin-de-semana', compact('recommendedProducts'));
    }
}