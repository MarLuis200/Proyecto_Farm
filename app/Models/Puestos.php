<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puestos extends Model
{
    use HasFactory;
    // Instancio la tabla 'puestos'
    protected $table = 'puestos';

    // Declaro los campos que usaré de la tabla 'puestos'.
    protected $fillable = ['id', 'descripcion'];
}
