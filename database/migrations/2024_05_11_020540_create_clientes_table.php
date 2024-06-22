<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persona_id');
            $table->string('nombre');
            $table->string('apellido_paterno');
            $table->string('apellido_materno');
            $table->string('direccion');
            $table->string('telefono');
            $table->string('correo');
            $table->string('img')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Definición de la clave foránea
            $table->foreign('persona_id')
                  ->references('id')->on('personas')
                  ->onDelete('cascade'); // Elimina automáticamente los clientes asociados cuando se elimina una persona.
        });
    }

    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
