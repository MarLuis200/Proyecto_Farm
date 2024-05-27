<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    use HasFactory;

    // Defino la tabla 'proveedores'
    protected $table = 'proveedores';

    // Defino los campos que utilizaré de la tabla 'proveedores'
    protected $fillable = ['nombre', 'direccion', "telefono", 'correo', 'img'];
}
