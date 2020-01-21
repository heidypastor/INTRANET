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
            $table->unsignedBigInteger('inputs_id');  /*Relación con la tabla inputs*/
            $table->foreign('inputs_id')->references('id')->on('inputs');
            $table->unsignedBigInteger('processes_id');  /*Relación con la tabla processes*/
            $table->foreign('processes_id')->references('id')->on('processes');
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
        Schema::dropIfExists('inputs_processes');
    }
}
