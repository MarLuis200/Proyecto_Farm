<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    // Relación para obtener la persona asociada al cliente
    public function personas()
    {
        return $this->belongsTo(Personas::class, 'persona_id', 'id');
    }
}
