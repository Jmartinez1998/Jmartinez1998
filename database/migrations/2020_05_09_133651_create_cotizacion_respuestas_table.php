<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCotizacionRespuestasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cotizacion_respuestas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('Asunto');
            $table->text('mensaje');
            $table->date('fecha');
            $table->string('email');
            $table->string('estatus');
            $table->integer('cotizacion_id');
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
        Schema::dropIfExists('cotizacion_respuestas');
    }
}
