<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargosUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargos_users', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id');  /*Relación con la tabla processes*/
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('cargo_id');  /*Relación con la tabla proveedors*/
            $table->foreign('cargo_id')->references('id')->on('cargos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cargos_users');
    }
}
