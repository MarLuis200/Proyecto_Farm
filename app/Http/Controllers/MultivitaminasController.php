<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MultivitaminasController extends Controller
{
    public function index()
    {
        return view('/home/vitaminas/multivitaminas');
    }
}
