<?php

use Illuminate\Database\Seeder;
use App\Activity;

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
        $activity = new Activity();
        $activity->ActiName = 'Evaluacion de provedores y subcontratistas';
        $activity->save();

        // id = 02
        $activity = new Activity();
        $activity->ActiName = 'solicitud y analisisi de cotizaciones';
        $activity->save();

        // id = 03
        $activity = new Activity();
        $activity->ActiName = 'Elaboracion de terminos de referencia para licitaciones';
        $activity->save();
    }
}
