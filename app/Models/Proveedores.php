<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    protected $table = 'proveedores';

    protected $fillable = ['fecha_venta', 'id_proveedor', 'descripcion', 'cantidad', 'precio', 'id_producto'];
}
