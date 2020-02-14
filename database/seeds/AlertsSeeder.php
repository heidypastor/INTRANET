<?php

use Illuminate\Database\Seeder;

class AlertsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $alert = new Alerts();
        $alert->AlertDateEvent = '13/03/2020';
        $alert->AlertName = 'Alerta Prueba';
        $alert->AlertDescription = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.';
        $alert->AlertDateNotifi = '10/03/2020';
        $alert->AlertNotification = 0;
        $alert->save();
    }
}
