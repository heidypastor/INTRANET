<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequisitosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisitos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->string('ReqName');
            $table->string('ReqType'); /*Este campo hace referencia a la clasificación de la caracterización de proceso es decir
                0 = Legales
                1 = Empresariales
                2 = Otras - Cliente*/
            $table->date('ReqDate');
            $table->string('ReqEnte');
            $table->string('ReqQueDice');
            $table->softDeletes();
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
        Schema::dropIfExists('requisitos');
    }
}
