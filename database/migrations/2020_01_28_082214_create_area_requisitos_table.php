<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaRequisitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas_requisitos', function (Blueprint $table) {
            $table->timestamps();
            $table->unsignedBigInteger('areas_id');  /*Relación con la tabla areas*/
            $table->foreign('areas_id')->references('id')->on('areas');
            $table->unsignedBigInteger('requisitos_id');  /*Relación con la tabla requisitos*/
            $table->foreign('requisitos_id')->references('id')->on('requisitos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('areas_requisitos');
    }
}
