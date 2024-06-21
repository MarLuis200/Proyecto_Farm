<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    use HasFactory;

    // Instancio la tabla 'productos'
    protected $table = 'empleados';

    // Declaro los campos que usaré de la tabla 'productos'
    protected $fillable = ['id_persona','id_puesto'];

    public function persona()
    {
        return $this->belongsTo(Personas::class, 'id_persona');
    }

    public function puesto()
    {
        return $this->belongsTo(Puestos::class, 'id_puesto');
    }

}
