<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessesRequisitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processes_requisitos', function (Blueprint $table) {
            $table->unsignedBigInteger('processes_id');  /*Relación con la tabla processes*/
            $table->foreign('processes_id')->references('id')->on('processes');
            $table->unsignedBigInteger('requisitos_id');  /*Relación con la tabla requisitos*/
            $table->foreign('requisitos_id')->references('id')->on('requisitos');
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
        Schema::dropIfExists('processes_requisitos');
    }
}
