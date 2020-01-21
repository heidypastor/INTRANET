<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessesOutputsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processes_outputs', function (Blueprint $table) {
            $table->unsignedBigInteger('outputs_id');  /*Relación con la tabla outputs*/
            $table->foreign('outputs_id')->references('id')->on('outputs');
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
        Schema::dropIfExists('outputs_processes');
    }
}
