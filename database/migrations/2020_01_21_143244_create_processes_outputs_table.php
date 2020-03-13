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
            $table->unsignedBigInteger('output_id');  /*Relación con la tabla output*/
            $table->foreign('output_id')->references('id')->on('outputs');
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
        Schema::dropIfExists('processes_outputs');
    }
}
