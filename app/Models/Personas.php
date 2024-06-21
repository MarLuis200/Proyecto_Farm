<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    use HasFactory;

    // Instancio la tabla 'personas'
    protected $table = 'personas';

    // Declaro los campos que usaré de la tabla 'personas'
    protected $fillable = ['nombre', 'apellido_paterno', 'apellido_materno', 'direccion','telefono','correo','img'];


}
