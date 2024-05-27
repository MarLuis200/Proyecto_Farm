<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    // Instancio la tabla 'productos'
    protected $table = 'clientes';

    // Declaro los campos que usaré de la tabla 'productos'
    protected $fillable = ['nombre', 'apellido_paterno', 'apellido_materno', 'direccion','telefono','correo','img'];

}
