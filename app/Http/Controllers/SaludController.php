<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludController extends Controller
{
   
    public function index()
    {
        return view('/home/salud/salud');
    }
    
}
