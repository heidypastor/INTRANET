<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndicatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indicators', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('IndName', 255); /*Nombre del indicador*/
            $table->string('IndObjective', 8); /*Objetivo del indicador*/
            $table->string('IndDescripcion', 1000)->default('Sin definir'); /*Que mide el indicador*/
            $table->string('IndFicha', 255)->default('Sin definir'); /*ficha del indicador*/
            $table->string('IndGraphic', 1000)->default('/white/img/grafica.jpg'); /*Imagen de la grafica del indicador*/
            $table->string('IndTable', 1000)->default('/white/img/tabla.jpg'); /*Imagen de la tabla con los datos del indicador*/
            $table->string('IndAnalysis', 1000)->default('/white/img/grafica.jpg'); /*grafica del Analisis mensual o por periodos*/
            $table->date('IndDateFrom')->nullable(); /*Desde cuando se tomaron los datos*/
            $table->date('IndDateUntil')->nullable(); /*Hasta cuando se tomaron los datos*/
            $table->softDeletes(); 
           /* $table->unsignedBigInteger('user_id');  /*Relación con la tabla usuarios*/
           //  $table->foreign('user_id')->references('id')->on('users'); 
           //  $table->unsignedBigInteger('area_id');  /*Relación con la tabla areas a la que pertenece el indicador*/
           //  $table->foreign('area_id')->references('id')->on('areas');*/*/*/
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indicators');
    }
}
