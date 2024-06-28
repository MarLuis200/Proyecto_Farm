<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    protected $table = 'ventas';

    // Declaro los campos que usaré de la tabla 'ventas'
    protected $fillable = ['producto_id', 'cantidad', 'total'];

    // Relación con el modelo Productos
    public function producto()
    {
        return $this->belongsTo(Productos::class);
    }
}
