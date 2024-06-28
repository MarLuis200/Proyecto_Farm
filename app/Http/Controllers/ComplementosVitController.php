<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComplementosVitController extends Controller
{
   
    public function index()
    {
        return view('/home/vitaminas/complementosVit');
    }
}


