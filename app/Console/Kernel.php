<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Alerts;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendAlert;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        /*$schedule->command('inspire')
                 ->hourly();*/

        $schedule->call(function () {
                   /*$alerts = Alert::where('AlertDateNotifi', today())->get();*/
                   $alerts = Alerts::with('user')->where('AlertDateNotifi', today())->get();
                   for ($i=0; $i < count($alerts); $i++) { 
                       Mail::to($alerts[$i]->user->email)->send(new sendAlert($alerts[$i]));
                   }
                })->everyMinute();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
