<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProcessesRecursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('processes_recursos', function (Blueprint $table) {
            $table->unsignedBigInteger('process_id');  /*Relación con la tabla processes*/
            $table->foreign('process_id')->references('id')->on('processes');
            $table->unsignedBigInteger('recursos_id');  /*Relación con la tabla recursos*/
            $table->foreign('recursos_id')->references('id')->on('recursos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('processes_recursos');
    }
}
