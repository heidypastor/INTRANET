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
            $table->string('DocSrc'); /*Archivo*/
            $table->string('DocVersion', 32); /*Version del archivo*/
            $table->string('DocType', 32); /*Tipo de documento*/
            $table->softDeletes(); 
            $table->string('DocMime', 9); /*Extensión interna del documento .jpg*/
            $table->string('DocOriginalName', 128); /*Nombre original del documento*/
            $table->unsignedInteger('DocSize'); /*Tamaño del documento*/
            $table->boolean('DocGeneral');/*Documento en general o restringido*/
            $table->boolean('DocPublisher'); /*Si es un borrador o publicado*/
            $table->unsignedBigInteger('users_id'); /*relación con la tabla usuarios*/
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
