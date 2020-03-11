<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGseguridadProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gseguridads_processes', function (Blueprint $table) {
            $table->unsignedBigInteger('gseguridad_id');  /*Relación con la tabla Gestion de seguridad y salud en el trabajo*/
            $table->foreign('gseguridad_id')->references('id')->on('gseguridads');
            $table->unsignedBigInteger('process_id');  /*Relación con la tabla processes*/
            $table->foreign('process_id')->references('id')->on('processes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gseguridad_processes');
    }
}
