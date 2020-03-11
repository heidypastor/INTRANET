<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGambientalProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gambientals_processes', function (Blueprint $table) {
            $table->unsignedBigInteger('gambiental_id');  /*Relación con la tabla Gestion ambiental*/
            $table->foreign('gambiental_id')->references('id')->on('gambientals');
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
        Schema::dropIfExists('gambiental_processes');
    }
}
