<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipos extends Model
{
    use HasFactory;
    // Instancio la tabla 'puestos'
    protected $table = 'tipos';

    // Declaro los campos que usaré de la tabla 'puestos'.
    protected $fillable = ['desc_tipos'];
}
