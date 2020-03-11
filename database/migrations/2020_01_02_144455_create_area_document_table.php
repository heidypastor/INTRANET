<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaDocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas_documents', function (Blueprint $table) {
            $table->timestamps();
            $table->unsignedBigInteger('areas_id');  /*Relación con la tabla areas*/
            $table->foreign('areas_id')->references('id')->on('areas');
            $table->unsignedBigInteger('documents_id');  /*Relación con la tabla documentos*/
            $table->foreign('documents_id')->references('id')->on('documents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('areas_documents');
    }
}
