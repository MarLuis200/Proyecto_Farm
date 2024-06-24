<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComplementosController extends Controller
{
    public function index()
    {
        return view('/home/vitaminas/complementos');
    }
}
