<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateActivitiesProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities_processes', function (Blueprint $table) {
            $table->unsignedBigInteger('activity_id');  /*Relación con la tabla activity*/
            $table->foreign('activity_id')->references('id')->on('activities');
            $table->unsignedBigInteger('process_id');  /*Relación con la tabla process*/
            $table->foreign('process_id')->references('id')->on('processes');
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
        Schema::dropIfExists('activities_processes');
    }
}
