<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludSexualController extends Controller
{
   
    public function index()
    {
        return view('/home/salud/saludsexual');
    }
}
