<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class HomeController extends Controller
{
   
    public function index()
{
    $productos = Productos::latest()->get();
    return view('home', compact('productos'));
}

}
