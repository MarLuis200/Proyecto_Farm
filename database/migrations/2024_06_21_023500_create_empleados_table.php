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
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_persona');
            $table->unsignedBigInteger('id_puesto');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('id_persona')->references('id')->on('personas')->onDelete('cascade');
            $table->foreign('id_puesto')->references('id')->on('puestos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
};
