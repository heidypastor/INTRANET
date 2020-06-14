<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSomeColumsToIndicatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('indicators', function (Blueprint $table) {
            $table->string('IndFrecuencia', 24);/*->se espera('mensual/trimestral/semestral')*/
            $table->string('IndMeta', 24)->default('Sin definir');/*->se espera('valor o porcentaje')*/
            $table->string('IndFormula', 255)->default('Sin definir');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('indicators', function (Blueprint $table) {
            $table->dropColumn('IndFrecuencia');
            $table->dropColumn('IndMeta');
            $table->dropColumn('IndFormula');
        });
    }
}
