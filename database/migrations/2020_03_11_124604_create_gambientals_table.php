<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGambientalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gambientals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('GesName');
            $table->string('GesType'); /*En este campo corresponden los tres campos de la caracterización de proceso de Gestion Ambiental es decir 
                0 = Aspectos Ambientales
                1 = Impactos Ambientales
                2 = Controles Operacionales */
            $table->softDeletes(); 
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
        Schema::dropIfExists('gambientals');
    }
}
