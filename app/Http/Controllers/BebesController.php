<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BebesController extends Controller
{
   
    public function index()
    {
        return view('/home/bebes/bebes');
    }
}
