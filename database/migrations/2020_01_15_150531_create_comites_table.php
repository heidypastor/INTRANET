<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
<<<<<<< Updated upstream
            $table->string('ComiName'); /*Nombre del comite*/
            $table->string('ComiSrc'); /*Imagen del comite que va a quedar en el home*/
            $table->string('ComiImage');/*Imagen o foto que quieran agregar*/
            $table->string('ComiParaQueSirve'); /*Para que sirve o cual es la función del comite*/
            $table->string('ComiTelefono'); /*Telefono de contacto del comite*/
            $table->string('ComiEmail'); /*Correo de contacto del comite*/
            $table->softDeletes(); 
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
=======
            $table->string('ComiName');
            $table->string('ComiSrc');
            $table->string('ComiImage');
            $table->string('ComiParaQueSirve');
            $table->string('ComiTelefono');
            $table->string('ComiEmail');
>>>>>>> Stashed changes
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comites');
    }
}
