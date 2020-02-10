<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulo3sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulo3', function (Blueprint $table) {
            $table->bigIncrements('id_modulo');
            $table->bigInteger('id_expediente')->unsigned(); 
            $table->string('tipo_audiencia')->nullable();
            $table->date('fecha_audiencia')->nullable();
            $table->date('fecha_inicio_audiencia')->nullable();
            $table->date('fecha_conclusion')->nullable();
            $table->string('se_difiere')->nullable();  
            $table->string('tipo_audicencia_diferida')->nullable();
            $table->string('causas_diferimientos')->nullable();
            $table->date('fecha_difiere_audiencia')->nullable();
            $table->date('fecha_continuidad')->nullable();
            $table->date('fecha_conclusion_diferida')->nullable();      
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
        Schema::dropIfExists('modulo3');
    }
}
