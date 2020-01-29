<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSomeColumnsToComitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comites', function (Blueprint $table) {
            $table->date('ComiDateLast')/*->default('2020/01/28')*/;
            $table->string('ComiObservations')/*->default('Observación default')*/;
            $table->date('ComiDateNext')/*->default('2020/01/30')*/;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('comites', function (Blueprint $table) {
            $table->dropColumn('ComiDateLast');
            $table->dropColumn('ComiObservations');
            $table->dropColumn('ComiDateNext');
        });
    }
}
