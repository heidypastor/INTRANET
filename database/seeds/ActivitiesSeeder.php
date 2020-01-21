<?php

use Illuminate\Database\Seeder;

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
        $activity = new Areas();
        $activity->AreaName = 'Comunicaciones e Informatica';
        $activity->AreaSede = 'Planta';
        $activity->save();
    }
}
