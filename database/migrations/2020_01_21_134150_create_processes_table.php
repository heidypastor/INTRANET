<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ProcName'); /*Nombre del proceso*/
            $table->string('ProcRevVersion'); /*numero de revision del proceso*/
            $table->string('ProcChangesDescription')->default('Cambio Default'); /*descripcion del ultimo cambio en el proceso*/
            $table->string('ProcImage');/*Imagen de referencia para identificar el proceso*/
            $table->text('ProcObjetivo'); /*objetivo del proceso*/
            $table->json('ProcResponsable'); /*responsables del proceso*/
            $table->json('ProcParticipantes'); /*Autoridad del proceso*/
            $table->string('ProcElaboro'); /*rol del usuario que elaboro el proceso*/
            $table->string('ProcReviso'); /*rol del usuario que reviso el proceso*/
            $table->string('ProcAprobo'); /*rol del usuario que aprobo el proceso*/
            $table->softDeletes();
            $table->timestamps();
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
        Schema::dropIfExists('processes');
    }
}
