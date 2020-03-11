<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAreaIndicatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('areas_indicators', function (Blueprint $table) {
            $table->timestamps();
            $table->unsignedBigInteger('areas_id');  /*Relación con la tabla areas*/
            $table->foreign('areas_id')->references('id')->on('areas');
            $table->unsignedBigInteger('indicators_id');  /*Relación con la tabla indicadores*/
            $table->foreign('indicators_id')->references('id')->on('indicators');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('areas_indicators');
    }
}
