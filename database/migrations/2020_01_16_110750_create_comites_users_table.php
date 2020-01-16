<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComitesUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comites_user', function (Blueprint $table) {
            /*$table->bigIncrements('id');*/
            $table->timestamps();
            $table->unsignedBigInteger('comites_id');  /*Relación con la tabla comites*/
            $table->foreign('comites_id')->references('id')->on('comites');
            $table->unsignedBigInteger('user_id');  /*Relación con la tabla usuarios*/
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comites_users');
    }
}
