<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('DocName', 128); /*Nombre del documento*/
            $table->string('DocSrc')->default('/images/default_temporal.pdf'); /*Archivo*/
            $table->string('DocVersion', 32); /*Version del archivo*/
            $table->string('DocType', 32); /*Tipo de documento: Manual, Procedimiento, Instructivo, Normas de trabajo, Formatos, Politicas y Reglamento*/
            $table->softDeletes(); 
            $table->string('DocMime', 32)->default('PDF'); /*Extensión interna del documento .jpg*/
            $table->string('DocOriginalName', 128)->default('test.pdf'); /*Nombre original del documento*/
            $table->unsignedInteger('DocSize')->default(82); /*Tamaño del documento*/
            $table->boolean('DocGeneral')->default(0);/*Documento en general o restringido
                0 = Restringido
                1 = General  */
            $table->boolean('DocPublisher'); /*Si es un borrador o publicado 
                0 = Borrador 
                1 = Publicado  */
            $table->unsignedBigInteger('users_id')->default(3); /*relación con la tabla usuarios*/
            $table->foreign('users_id')->references('id')->on('users');
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
        Schema::dropIfExists('documents');
    }
}
