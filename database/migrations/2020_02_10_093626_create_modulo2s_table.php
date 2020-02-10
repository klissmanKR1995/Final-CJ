<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulo2sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulo2', function (Blueprint $table) {
            $table->bigIncrements('id_modulo');
            $table->bigInteger('id_expediente')->unsigned();
            $table->bigInteger('monto_demandado')->nullable();
            $table->date('fecha_emision')->nullable();
            $table->string('tipo_acuerdo')->nullable();
            $table->string('subsana_prevencion')->nullable();     
            $table->string('contestacion_demanda')->nullable();
            $table->date('fecha_no_contesta')->nullable();
            $table->string('si_contesta')->nullable();
            $table->date('fecha_si_contesta')->nullable();
            $table->string('reconviene_demanda')->nullable();
            $table->date('fecha_reconviene')->nullable();
            $table->string('contesta_reconvenido')->nullable();
            $table->bigInteger('numero_acuerdos')->nullable();
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
        Schema::dropIfExists('modulo2');
    }
}
