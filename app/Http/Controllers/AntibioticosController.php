<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AntibioticosController extends Controller
{
   
    public function index()
    {
        return view('antibioticos');
    }
}