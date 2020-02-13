<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Alerts;
use App\Mail\sendAlert;
use App\Jobs\sendAlertJob;
use App\Http\Controllers\AlertsController;

class MailDailyAlerts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:dailyalerts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'envia notificación por correo electronico de todas las alertas con fecha de notificacion igual a la fecha actual';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $alerts = Alerts::with('user')->where('AlertDateNotifi', today())->get();
        for ($i=0; $i < count($alerts); $i++) { 
            Mail::to($alerts[$i]->user->email)->queue(new sendAlert($alerts[$i]));
            /*$alerts->update('AlertNotification' = 1);*/
            $alerts[$i]->AlertNotification = 1;
            $alerts[$i]->save();
            // sendAlertJob::dispatch($alerts[$i]);
        }

    }
}
