<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGseguridadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gseguridads', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('SeguName');
            $table->string('SeguType');  /*En  este campo correspoden los tres campos de la caracterización de proceso de Gestión de seguridad y salud en el trabajo, es decir
                0 = Peligros
                1 = Riesgos
                2 = Controles Operacionales  */
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
        Schema::dropIfExists('gseguridads');
    }
}
