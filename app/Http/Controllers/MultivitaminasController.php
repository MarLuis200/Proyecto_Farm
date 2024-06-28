<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;
use App\Models\Tipos;

class MultivitaminasController extends Controller
{
    public function index()
    {
        $tipoMultivitaminas = Tipos::where('desc_tipos', 'multivitaminas')->first();

        if ($tipoMultivitaminas) {
            
            $productos = Productos::where('id_tipo', $tipoMultivitaminas->id)->get();
        } else {
            $productos = [];
        }
        return view('/home/vitaminas/multivitaminas', compact('productos'));
    }
}
