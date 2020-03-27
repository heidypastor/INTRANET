<?php

use Illuminate\Database\Seeder;
use App\Alerts;

class AlertsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // id = 01
        $alert = new Alerts();
        $alert->AlertDateEvent = '2020-02-28 00:00:00';
        $alert->AlertName = 'Personal';
        $alert->AlertDescription = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua.';
        $alert->AlertDateNotifi = '2020-02-19 00:00:00';
        $alert->AlertNotification = 0;
        $alert->AlertType = 'Personal';
        $alert->AlertPercentage = 100;
        $alert->AlertRealizado = 0;
        $alert->save();

         // id = 02
        $alert = new Alerts();
        $alert->AlertDateEvent = '2020-02-28 00:00:00';
        $alert->AlertName = 'Personal';
        $alert->AlertDescription = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtempor incididunt ut labore et dolore magna aliqua.';
        $alert->AlertDateNotifi = '2020-02-19 00:00:00';
        $alert->AlertNotification = 0;
        $alert->AlertType = 'Personal';
        $alert->AlertPercentage = 100;
        $alert->AlertRealizado = 0;
        $alert->user_id = 2;
        $alert->save();
    }
}
