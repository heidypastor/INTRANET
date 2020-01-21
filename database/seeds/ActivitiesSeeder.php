<?php

use Illuminate\Database\Seeder;
use App\Activities;

class ActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // id = 01
        $activity = new Activities();
        $activity->ActiName = 'Evaluacion de provedores y subcontratistas';
        $activity->save();

        // id = 02
        $activity = new Activities();
        $activity->ActiName = 'solicitud y analisisi de cotizaciones';
        $activity->save();

        // id = 03
        $activity = new Activities();
        $activity->ActiName = 'Elaboracion de terminos de referencia para licitaciones';
        $activity->save();
    }
}
