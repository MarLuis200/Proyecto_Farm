<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    // Instancio la tabla 'productos'
    protected $table = 'inventario';

    // Declaro los campos que usaré de la tabla 'productos'.
    protected $fillable = ['nombre', 'existencia', 'fecha_caducidad', 'no_compra','clave_proveedor','img'];
}
