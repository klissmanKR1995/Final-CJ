<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModulo9sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modulo9s', function (Blueprint $table) {
            $table->bigIncrements('id_modulo');
            $table->bigInteger('id_expediente')->unsigned();
            $table->bigInteger('suerte_principal_liquidada_en_la_sentencia')->nullable();
            $table->bigInteger('intereses_ordinarios_liquidados_en_la_sentencia')->nullable();
            $table->bigInteger('intereses_moratorios_liquidados_en_la_sentencia')->nullable();
            $table->bigInteger('pena_convencional_liquidada_en_la_sentencia')->nullable();
            $table->bigInteger('daños_liquidados_en_la_sentencia')->nullable();
            $table->bigInteger('perjuicios_liquidados_en_la_sentencia')->nullable();
            $table->bigInteger('gastos_liquidados_en_la_sentencia')->nullable();
            $table->bigInteger('costas_liquidadas_en_la_sentencia')->nullable();
            $table->bigInteger('honorarios_liquidados_en_la_sentencia')->nullable();
            $table->bigInteger('otros_liquidados_en_la_sentencia')->nullable();
            $table->bigInteger('suerte_principal_liquidada_en_la_ejecución_de_la_sentencia')->nullable();
            $table->bigInteger('intereses_ordinarios_liquidados_en_la_ejecución_la_sentencia')->nullable();
            $table->bigInteger('intereses_moratorios_liquidados_en_la_ejecución_de_la_sentencia')->nullable();
            $table->bigInteger('pena_convencional_liquidada_en_la_ejecución_de_la_sentencia');
            $table->bigInteger('daños_liquidados_en_la_ejecución_de_la_sentencia')->nullable();
            $table->bigInteger('perjuicios_liquidados_en_la_ejecución_de_la_sentencia')->nullable();
            $table->bigInteger('gastos_liquidados_en_la_ejecución_de_la_sentencia')->nullable();
            $table->bigInteger('costas_liquidadas_en_la_ejecución_de_la_sentencia')->nullable();
            $table->bigInteger('honorarios_liquidados_en_la_ejecución_de_la_sentencia')->nullable();
            $table->bigInteger('otros_liquidados_en_la_ejecución_de_la_sentencia')->nullable();
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
        Schema::dropIfExists('modulo9s');
    }
}
