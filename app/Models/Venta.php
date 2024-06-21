<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Venta extends Model
{
    
    use HasFactory;

    protected $table = 'ventas';

    // Declaro los campos que usaré de la tabla 'productos'
    protected $fillable = ['cantidad','total'];

    // En el modelo Venta
    public function producto()
    {
        return $this->belongsTo(Productos::class);
    }

    public function precio()
    {
        return $this->belongsTo(Productos::class, 'precio');
    }
    
}