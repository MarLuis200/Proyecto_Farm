<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class HigieneController extends Controller
{
    public function index()
    {
        $producto15 = Productos::where('id_tipo', 15)->get();
        return view('/home/departamentos/higiene', compact('producto15'));
    }
}
