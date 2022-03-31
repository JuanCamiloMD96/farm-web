<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PersonaProyecto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
     {
        Schema::create('Personaproyectos', function (Blueprint $table) {
            $table->bigIncrements('id');
            //relacion de personas y proyectos para comentarios
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('Users');
            $table->unsignedBigInteger('proyectos_id');
            $table->foreign('proyectos_id')->references('id')->on('Proyectos');
            $table->text('acciones_realizadas');
            $table->text('descripcion_acciones');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Personaproyectos');
    }
}
