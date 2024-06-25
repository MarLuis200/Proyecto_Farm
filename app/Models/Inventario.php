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
    protected $fillable = ['producto_id', 'stock', 'fecha_caducidad','precio','img'];

    public function producto()
    {
        return $this->belongsTo(Productos::class, 'producto_id');
    }
}
