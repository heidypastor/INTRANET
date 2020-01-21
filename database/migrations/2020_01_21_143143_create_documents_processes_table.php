<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentsProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents_processes', function (Blueprint $table) {
            $table->unsignedBigInteger('documents_id');  /*Relación con la tabla documents*/
            $table->foreign('documents_id')->references('id')->on('documents');
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
        Schema::dropIfExists('documents_processes');
    }
}
