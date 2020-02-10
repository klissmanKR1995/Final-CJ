<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulo4sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('modulo4', function (Blueprint $table) {
            $table->bigIncrements('id_modulo');
            $table->bigInteger('id_expediente')->unsigned(); 
            $table->string('se_ofrecen_pruebas')->nullable();
            $table->string('parte_que_ofrece_prueba')->nullable();
            $table->date('fecha_ofrecen_pruebas')->nullable();
            $table->date('fecha_admision_pruebas')->nullable();
            $table->string('pruebas_ofrecidas_en')->nullable();
            $table->string('tipo_pruebas_ofrecidas')->nullable();
            $table->string('tipo_pruebas_admitidas')->nullable();
            $table->string('tipo_pruebas_desahogadas')->nullable();
            $table->date('fecha_desahogo_pruebas')->nullable();
            $table->bigInteger('numero_pruebas_desahogadas')->nullable();
            $table->date('fecha_aceptacion_cargo')->nullable();
            $table->date('fecha_perritos_rinden')->nullable();
            $table->string('juez_designa_perito')->nullable();
            $table->string('se_renuncia_pruenas')->nullable();
            $table->string('parte_renuncia_pruebas')->nullable();
            $table->string('tipo_pruebas_renuncia')->nullable();
            $table->string('motivos_renuncia_pruebas')->nullable();
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
        Schema::dropIfExists('modulo4');
    }
}
