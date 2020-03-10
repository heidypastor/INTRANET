<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendAlert;
use App\Alerts;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        Commands\MailDailyAlerts::class
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

        $schedule->command('mail:dailyalerts')->everyFiveMinutes();
        /*$schedule->command('mail:dailyalerts')->dailyAt('07:00');*/

        // $schedule->call(function () {
        //    /*$alerts = Alert::where('AlertDateNotifi', today())->get();*/
        //    $alerts = Alerts::with('user')->where('AlertDateNotifi', today())->get();
        //    for ($i=0; $i < count($alerts); $i++) { 
        //        Mail::to($alerts[$i]->user->email)->queue(new sendAlert($alerts[$i]));
        //    }
        // })->everyMinute();
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
