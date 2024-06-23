<?php

namespace App\Observers;

use App\Models\Personas;
use App\Models\Clientes;
use App\Models\Proveedores;

class PersonaObserver
{
    public function updated(Personas $personas)
    {
        // Actualizar los clientes relacionados
        $this->updateClientes($personas);

        // Actualizar los proveedores relacionados
        $this->updateProveedores($personas);
    }

    protected function updateClientes(Personas $personas)
    {
        // Obtener todos los clientes que tienen esta persona_id
        $clientes = Clientes::where('persona_id', $personas->id)->get();

        // Actualizar los datos de los clientes relacionados
        foreach ($clientes as $cliente) {
            $this->updatePersonaData($cliente, $personas);
            $cliente->save();
        }
    }

    protected function updateProveedores(Personas $personas)
    {
        // Obtener todos los proveedores que tienen esta persona_id
        $proveedores = Proveedores::where('persona_id', $personas->id)->get();

        // Actualizar los datos de los proveedores relacionados
        foreach ($proveedores as $proveedor) {
            $this->updatePersonaData($proveedor, $personas);
            $proveedor->save();
        }
    }

    protected function updatePersonaData($personaModel, Personas $personas)
    {
        // Actualizar los datos comunes de la persona
        $personaModel->nombre = $personas->nombre;
        $personaModel->apellido_paterno = $personas->apellido_paterno;
        $personaModel->apellido_materno = $personas->apellido_materno;
        $personaModel->direccion = $personas->direccion;
        $personaModel->telefono = $personas->telefono;
        $personaModel->correo = $personas->correo;
        $personaModel->img = $personas->img;
    }
}
