<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessesProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processes_processes', function (Blueprint $table) {
            $table->unsignedBigInteger('processes_id');  /*Relación con la tabla processes*/
            $table->foreign('processes_id')->references('id')->on('processes');
            $table->unsignedBigInteger('supportProcesses_id');  /*Relación con la tabla processes de soporte*/
            $table->foreign('supportProcesses_id')->references('id')->on('processes');
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
        Schema::dropIfExists('processes_processes');
    }
}
