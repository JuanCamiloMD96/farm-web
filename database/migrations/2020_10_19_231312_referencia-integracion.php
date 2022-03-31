<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class referenciaintegracion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referenciaintegracion', function (Blueprint $table) {
            $table->bigIncrements('id');
            //crear claves foraneas de parcelas y proyectos
            $table->unsignedBigInteger('parcelas_id');
            $table->foreign('parcelas_id')->references('id')->on('Parcelas');
            $table->unsignedBigInteger('proyectos_id');
            $table->foreign('proyectos_id')->references('id')->on('Proyectos');
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
        Schema::dropIfExists('referenciaintegracion');
    }
}
