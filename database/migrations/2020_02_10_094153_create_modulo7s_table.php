<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulo7sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('modulo7', function (Blueprint $table) {
            $table->bigIncrements('id_modulo');
            $table->bigInteger('id_expediente')->unsigned();
            $table->string('tipo_termminacion')->nullable();
            $table->string('caso_terminacion')->nullable();
            $table->string('fase_terminacion')->nullable();
            $table->date('fecha_terminacion')->nullable();
            $table->string('fecha_emision_sentencia')->nullable();
            $table->string('sentencia_favor')->nullable();
            $table->bigInteger('monto_liquido')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('id_expediente')->references('id_expediente')->on('expedientes');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('modulo7');
    }
}
