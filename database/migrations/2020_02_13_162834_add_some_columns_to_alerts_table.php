<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSomeColumnsToAlertsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alerts', function (Blueprint $table) {
            $table->string('AlertType'); /*Este campo llevara puntualmente los tipos de alertas, si son globales, por Áreas o personales*/
            $table->float('AlertPercentage', 5, 2); /*Este campo va a contener el porcentaje el cual se va a llevar como referencia para el envio de la notificación por color*/
            $table->boolean('AlertRealizado'); /*Este campo verifica si la alerta ya fue realizada 0 = No realizado 1 = Realizado*/
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alerts', function (Blueprint $table) {
            $table->dropColumn('AlertType');
            $table->dropColumn('AlertPercentage');
            $table->dropColumn('AlertRealizado');
        });
    }
}
