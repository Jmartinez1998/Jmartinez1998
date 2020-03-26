<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('comentarios', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->string('comentario');
        $table->string('nombre');
        $table->string('email');
        $table->string('estatus');
        $table->integer('post_id');
        $table->integer('usuario_id');
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
      Schema::dropIfExists('comentarios');
    }
}
