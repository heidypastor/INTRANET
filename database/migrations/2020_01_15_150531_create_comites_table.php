<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comites', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('ComiName');
            $table->string('ComiSrc');
            $table->string('ComiImage');
            $table->string('ComiParaQueSirve');
            $table->string('ComiTelefono');
            $table->string('ComiEmail');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comites');
    }
}
