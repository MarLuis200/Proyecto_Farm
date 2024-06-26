<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->date('fecha_caducidad'); // Cambiado a tipo de dato date
            $table->unsignedBigInteger('id_tipo');
            $table->decimal('precio', 8, 2); // Cambiado a tipo de dato decimal
            $table->integer('stock'); // Cambiado a tipo de dato integer
            $table->string('img');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_tipo')->references('id')->on('tipos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
};
