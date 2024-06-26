<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
    use HasFactory;

    // Instancio la tabla 'productos'
    protected $table = 'productos';

    // Declaro los campos que usaré de la tabla 'productos'
    protected $fillable = ['nombre','descripcion', 'fecha_caducidad','id_tipo','precio','stock','img'];

}
