<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSomeColumnsToProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('processes', function (Blueprint $table) {
            $table->string('ProcAlcance', 500);
            $table->string('ProcAmbienTrabajo', 500);
            $table->json('ProcPolitOperacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('processes', function (Blueprint $table) {
            $table->dropColumn('ProcAlcance');
            $table->dropColumn('ProcAmbienTrabajo');
            $table->dropColumn('ProcPolitOperacion');
        });
    }
}