<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulo6sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulo6', function (Blueprint $table) {
            $table->bigIncrements('id_modulo');
            $table->bigInteger('id_expediente')->unsigned();
            $table->string('alegatos_presentados')->nullable();
            $table->string('alegatos_presentados_parte_demandada')->nullable();
            $table->string('incidentes_pendientes')->nullable();
            $table->string('numero_incidentes_por_resolver')->nullable();
            $table->string('numero_incidentes_resueltos')->nullable();
            $table->string('numero_total_acuerdos_por_resolver')->nullable();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('id_expediente')->references('id_expediente')->on('expedientes');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('modulo6');
    }
}
