<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alerts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->date('AlertDateEvent');
            $table->string('AlertName');
            $table->string('AlertDescription');
            $table->date('AlertDateNotifi');
            $table->unsignedTinyInteger('AlertNotification')->default(0); /*0 = Sin notificar y 1 = Notificado Rojo 2 = Notificado Amarillo y 3 = Notificado verde  4 = Notificado Realizado 5 = Notificado NO Realizado*/
            $table->softDeletes();
            $table->unsignedBigInteger('user_id')->default(1);  /*Relación con la tabla usuarios*/
            $table->foreign('user_id')->references('id')->on('users');
            $table->engine = 'InnoDB';
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alerts');
    }
}
