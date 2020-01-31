<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInputsProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inputs_processes', function (Blueprint $table) {
            $table->unsignedBigInteger('input_id');  /*Relación con la tabla input*/
            $table->foreign('input_id')->references('id')->on('inputs');
            $table->unsignedBigInteger('process_id');  /*Relación con la tabla process*/
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
        Schema::dropIfExists('inputs_processes');
    }
}
