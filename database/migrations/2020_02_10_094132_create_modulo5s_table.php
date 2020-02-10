<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulo5sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulo5', function (Blueprint $table) {
            $table->bigIncrements('id_modulo');
            $table->bigInteger('id_expediente')->unsigned();
            $table->string('emision_acuerdo')->nullable();
            $table->date('fecha_emision_acuerdo')->nullable();
            $table->date('fecha_emision_acuerdo_probatorio')->nullable();
            $table->bigInteger('numero_total_acuerdos')->nullable();
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
        Schema::dropIfExists('modulo5');
    }
}
