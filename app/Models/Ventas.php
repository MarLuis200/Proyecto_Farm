<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    use HasFactory;

    // Defino la tabla 'ventas'
    protected $table = 'ventas';

    // Defino los campos que utilizaré de la tabla 'ventas'
    protected $fillable = [
        'id_venta', 
        'id_producto', 
        'cantidad', 
        'total', 
    ];
}
