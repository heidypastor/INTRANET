<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Alerts;
use App\Areas;
use App\User;
use App\Mail\sendAlert;
use App\Mail\sendAlertGreen;
use App\Mail\sendAlertYellow;
use App\Mail\sendAlertRed;
use App\Mail\sendAlertRealizado;
use App\Mail\sendAlertNoRealizado;
use App\Jobs\sendAlertJob;
use App\Http\Controllers\AlertsController;
use Spatie\Permission\Models\Role;

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
    protected $description = 'envia notificación por correo electronico de todas las alertas con fecha de notificacion igual o menor a la fecha actual';

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
        $alerts = Alerts::with('user')->where('AlertDateNotifi', '<=', today())->where('deleted_at', '=', Null)->get();
        for ($i=0; $i < count($alerts); $i++) { 

            $FechaNotificacion = $alerts[$i]->AlertDateNotifi;

            $usuario = User::where('id', $alerts[$i]->user_id)->first();
            $areadelusuario = Areas::where('id', $usuario->areas_id)->first();
            $jefearea = User::with(['areas', 'roles' => function ($query) {
                $query->where('name', 'JefeArea');
            }])
            ->role('JefeArea')
            ->where('areas_id', $areadelusuario->id)->first();


            if ($jefearea != "") {
                /*Destinatarios Global cuando hay jefe de área*/
                $destinatariosGlobal = ([$alerts[$i]->user->email, 'gerencia@prosarc.com.co', $jefearea->email, 'gerenteplanta@prosarc.com.co']);
                /*Destinatarios Global Bogota cuando hay jefe de área*/
                $destinatariosGlobalBogota = ([$alerts[$i]->user->email, 'gerencia@prosarc.com.co', $jefearea->email, 'subgerencia@prosarc.com.co']);
                /*Destinatarios Sede cuando hay jefe de área*/
                $destinatariosSede = ([$alerts[$i]->user->email, $jefearea->email, 'gerenteplanta@prosarc.com.co']);
                /*Destinatarios Sede Bogotá cuando hay jefe de área*/
                $destinatariosSedeBogota = ([$alerts[$i]->user->email, $jefearea->email, 'subgerencia@prosarc.com.co']);
                /*Destinatarios por área cuando hay jefe de área*/
                $destinatariosArea = ([$alerts[$i]->user->email, $jefearea->email]);

            }else{
                /*Destinatarios Global cuando NO hay jefe de área*/
                $destinatariosGlobal = ([$alerts[$i]->user->email, 'gerencia@prosarc.com.co', 'gerenteplanta@prosarc.com.co']);
                /*Destinatarios Global Bogota cuando NO hay jefe de area*/
                $destinatariosGlobalBogota = ([$alerts[$i]->user->email, 'gerencia@prosarc.com.co', 'subgerencia@prosarc.com.co']);
                /*Destinatarios Sede cuando NO hay jefe de área*/
                $destinatariosSede = ([$alerts[$i]->user->email, 'gerenteplanta@prosarc.com.co']);
                /*Destinatarios Sede Bogotá cuando NO hay jefe de área*/
                $destinatariosSedeBogota = ([$alerts[$i]->user->email, 'subgerencia@prosarc.com.co']);
                /*Destinatarios por área cuando hay NO jefe de área*/
                $destinatariosArea = ([$alerts[$i]->user->email]);

            }


            if ($alerts[$i]->AlertRealizado == 0 & $alerts[$i]->AlertNotification !=5 & $alerts[$i]->AlertDateEvent >= today()) {
                switch ($alerts[$i]->AlertType) {
                    case 'Global':

                        switch ($areadelusuario->AreaSede) {
                            case 'Planta':
                                
                                if ($FechaNotificacion  <= today()) {

                                    $diferencia = $alerts[$i]->AlertDateEvent->diffInDays($alerts[$i]->AlertDateNotifi);

                                    switch ($alerts[$i]->AlertDateEvent->diffInDays($alerts[$i]->AlertDateNotifi)) {
                                        case ($diferencia <= 0):
                                        
                                            break;
                                        case ($diferencia <= 3):
                                               Mail::to($destinatariosGlobal)->queue(new sendAlertRed($alerts[$i]));
                                               /*$alerts->update('AlertNotification' = 1);*/
                                               $alerts[$i]->AlertNotification = 1;
                                               $alerts[$i]->save();
                                               // sendAlertJob::dispatch($alerts[$i]);
                                            break;

                                        case ($diferencia <= 10):
                                            if ($alerts[$i]->AlertNotification !== 2) {
                                                Mail::to($destinatariosGlobal)->queue(new sendAlertYellow($alerts[$i]));
                                                /*$alerts->update('AlertNotification' = 1);*/
                                                $alerts[$i]->AlertNotification = 2;
                                                $alerts[$i]->save();
                                                // sendAlertJob::dispatch($alerts[$i]);
                                            }
                                            
                                            break;
                                        case ($diferencia <= 62):
                                            if ($alerts[$i]->AlertNotification !== 3) {
                                                Mail::to($destinatariosGlobal)->queue(new sendAlertGreen($alerts[$i]));
                                                /*$alerts->update('AlertNotification' = 1);*/
                                                $alerts[$i]->AlertNotification = 3;
                                                $alerts[$i]->save();
                                                // sendAlertJob::dispatch($alerts[$i]);
                                            }
                                            break;
                                        default:
                                            
                                            break;
                                    }
                                }else{
                                    return "NO ENVIADO";
                                }

                                break;
                            
                            case 'Bogotá':
                                
                                if ($FechaNotificacion  <= today()) {

                                    $diferencia = $alerts[$i]->AlertDateEvent->diffInDays($alerts[$i]->AlertDateNotifi);

                                    switch ($alerts[$i]->AlertDateEvent->diffInDays($alerts[$i]->AlertDateNotifi)) {
                                        case ($diferencia <= 0):
                                        
                                            break;
                                        case ($diferencia <= 3):
                                               Mail::to($destinatariosGlobalBogota)->queue(new sendAlertRed($alerts[$i]));
                                               /*$alerts->update('AlertNotification' = 1);*/
                                               $alerts[$i]->AlertNotification = 1;
                                               $alerts[$i]->save();
                                               // sendAlertJob::dispatch($alerts[$i]);
                                            break;
                                        case ($diferencia <= 10):
                                            if ($alerts[$i]->AlertNotification !== 2) {
                                                Mail::to($destinatariosGlobalBogota)->queue(new sendAlertYellow($alerts[$i]));
                                                /*$alerts->update('AlertNotification' = 1);*/
                                                $alerts[$i]->AlertNotification = 2;
                                                $alerts[$i]->save();
                                                // sendAlertJob::dispatch($alerts[$i]);
                                            }
                                            
                                            break;
                                        case ($diferencia <= 62):
                                            if ($alerts[$i]->AlertNotification !== 3) {
                                                Mail::to($destinatariosGlobalBogota)->queue(new sendAlertGreen($alerts[$i]));
                                                /*$alerts->update('AlertNotification' = 1);*/
                                                $alerts[$i]->AlertNotification = 3;
                                                $alerts[$i]->save();
                                                // sendAlertJob::dispatch($alerts[$i]);
                                            }
                                            break;
                                        default:
                                            
                                            break;
                                    }
                                }else{
                                    return "NO ENVIADO";
                                }

                                break;
                            
                            default:
                                # code...
                                break;
                        }

                        break;
                    
                    case 'Sede':
                        
                        switch ($areadelusuario->AreaSede) {
                            case 'Planta':
                               
                                if ($FechaNotificacion  <= today()) {

                                    $diferencia = $alerts[$i]->AlertDateEvent->diffInDays($alerts[$i]->AlertDateNotifi);

                                    switch ($alerts[$i]->AlertDateEvent->diffInDays($alerts[$i]->AlertDateNotifi)) {
                                        case ($diferencia <= 0):
                                        
                                            break;
                                        case ($diferencia <= 3):
                                               Mail::to($destinatariosSede)->queue(new sendAlertRed($alerts[$i]));
                                               /*$alerts->update('AlertNotification' = 1);*/
                                               $alerts[$i]->AlertNotification = 1;
                                               $alerts[$i]->save();
                                               // sendAlertJob::dispatch($alerts[$i]);
                                            break;
                                        case ($diferencia <= 10):
                                            if ($alerts[$i]->AlertNotification !== 2) {
                                                Mail::to($destinatariosSede)->queue(new sendAlertYellow($alerts[$i]));
                                                /*$alerts->update('AlertNotification' = 1);*/
                                                $alerts[$i]->AlertNotification = 2;
                                                $alerts[$i]->save();
                                                // sendAlertJob::dispatch($alerts[$i]);
                                            }
                                            
                                            break;
                                        case ($diferencia <= 62):
                                            if ($alerts[$i]->AlertNotification !== 3) {
                                                Mail::to($destinatariosSede)->queue(new sendAlertGreen($alerts[$i]));
                                                /*$alerts->update('AlertNotification' = 1);*/
                                                $alerts[$i]->AlertNotification = 3;
                                                $alerts[$i]->save();
                                                // sendAlertJob::dispatch($alerts[$i]);
                                            }
                                            break;
                                        default:
                                            
                                            break;
                                    }
                                }else{
                                    return "NO ENVIADO";
                                }

                                break;
                            
                            case 'Bogotá':
                                
                                if ($FechaNotificacion  <= today()) {

                                    $diferencia = $alerts[$i]->AlertDateEvent->diffInDays($alerts[$i]->AlertDateNotifi);

                                    switch ($alerts[$i]->AlertDateEvent->diffInDays($alerts[$i]->AlertDateNotifi)) {
                                        case ($diferencia <= 0):
                                        
                                            break;
                                        case ($diferencia <= 3):
                                               Mail::to($destinatariosSedeBogota)->queue(new sendAlertRed($alerts[$i]));
                                               /*$alerts->update('AlertNotification' = 1);*/
                                               $alerts[$i]->AlertNotification = 1;
                                               $alerts[$i]->save();
                                               // sendAlertJob::dispatch($alerts[$i]);
                                            break;
                                        case ($diferencia <= 10):
                                            if ($alerts[$i]->AlertNotification !== 2) {
                                                Mail::to($destinatariosSedeBogota)->queue(new sendAlertYellow($alerts[$i]));
                                                /*$alerts->update('AlertNotification' = 1);*/
                                                $alerts[$i]->AlertNotification = 2;
                                                $alerts[$i]->save();
                                                // sendAlertJob::dispatch($alerts[$i]);
                                            }
                                            
                                            break;
                                        case ($diferencia <= 62):
                                            if ($alerts[$i]->AlertNotification !== 3) {
                                                Mail::to($destinatariosSedeBogota)->queue(new sendAlertGreen($alerts[$i]));
                                                /*$alerts->update('AlertNotification' = 1);*/
                                                $alerts[$i]->AlertNotification = 3;
                                                $alerts[$i]->save();
                                                // sendAlertJob::dispatch($alerts[$i]);
                                            }
                                            break;
                                        default:
                                            
                                            break;
                                    }
                                }else{
                                    return "NO ENVIADO";
                                }

                                break;
                            
                            default:
                                # code...
                                break;
                        }

                        break;
                    
                    case 'Area':
                        
                        if ($FechaNotificacion  <= today()) {

                            $diferencia = $alerts[$i]->AlertDateEvent->diffInDays($alerts[$i]->AlertDateNotifi);

                            switch ($alerts[$i]->AlertDateEvent->diffInDays($alerts[$i]->AlertDateNotifi)) {
                                case ($diferencia <= 0):
                                
                                    break;
                                case ($diferencia <= 3):
                                       Mail::to($destinatariosArea)->queue(new sendAlertRed($alerts[$i]));
                                       /*$alerts->update('AlertNotification' = 1);*/
                                       $alerts[$i]->AlertNotification = 1;
                                       $alerts[$i]->save();
                                       // sendAlertJob::dispatch($alerts[$i]);
                                    break;
                                case ($diferencia <= 10):
                                    if ($alerts[$i]->AlertNotification !== 2) {
                                        Mail::to($destinatariosArea)->queue(new sendAlertYellow($alerts[$i]));
                                        /*$alerts->update('AlertNotification' = 1);*/
                                        $alerts[$i]->AlertNotification = 2;
                                        $alerts[$i]->save();
                                        // sendAlertJob::dispatch($alerts[$i]);
                                    }
                                    
                                    break;
                                case ($diferencia <= 62):
                                    if ($alerts[$i]->AlertNotification !== 3) {
                                        Mail::to($destinatariosArea)->queue(new sendAlertGreen($alerts[$i]));
                                        /*$alerts->update('AlertNotification' = 1);*/
                                        $alerts[$i]->AlertNotification = 3;
                                        $alerts[$i]->save();
                                        // sendAlertJob::dispatch($alerts[$i]);
                                    }
                                    break;
                                default:
                                    
                                    break;
                            }
                        }else{
                            return "NO ENVIADO";
                        }

                        break;
                    
                    case 'Personal':
                        if ($FechaNotificacion  <= today()) {

                            $diferencia = $alerts[$i]->AlertDateEvent->diffInDays($alerts[$i]->AlertDateNotifi);

                            switch ($alerts[$i]->AlertDateEvent->diffInDays($alerts[$i]->AlertDateNotifi)) {
                                case ($diferencia <= 0):
                                
                                    break;
                                case ($diferencia <= 3):
                                       Mail::to($alerts[$i]->user->email)->queue(new sendAlertRed($alerts[$i]));
                                       /*$alerts->update('AlertNotification' = 1);*/
                                       $alerts[$i]->AlertNotification = 1;
                                       $alerts[$i]->save();
                                       // sendAlertJob::dispatch($alerts[$i]);
                                    break;
                                case ($diferencia <= 10):
                                    if ($alerts[$i]->AlertNotification !== 2) {
                                        Mail::to($alerts[$i]->user->email)->queue(new sendAlertYellow($alerts[$i]));
                                        /*$alerts->update('AlertNotification' = 1);*/
                                        $alerts[$i]->AlertNotification = 2;
                                        $alerts[$i]->save();
                                        // sendAlertJob::dispatch($alerts[$i]);
                                    }
                                    
                                    break;
                                case ($diferencia <= 62):
                                    if ($alerts[$i]->AlertNotification !== 3) {
                                        Mail::to($alerts[$i]->user->email)->queue(new sendAlertGreen($alerts[$i]));
                                        /*$alerts->update('AlertNotification' = 1);*/
                                        $alerts[$i]->AlertNotification = 3;
                                        $alerts[$i]->save();
                                        // sendAlertJob::dispatch($alerts[$i]);
                                    }
                                    break;
                                default:
                                    
                                    break;
                            }
                        }else{
                            return "NO ENVIADO";
                        }
                        break;
                    
                    default:
                        
                        break;
                }
            }


            if (($alerts[$i]->AlertDateEvent < today()) && ($alerts[$i]->AlertRealizado == 0)) {
                if ($alerts[$i]->AlertNotification !== 5) {
                    /*Mail::to($alerts[$i]->user->email)->queue(new sendAlertNoRealizado($alerts[$i]));
                    $alerts[$i]->AlertNotification = 5;
                    $alerts[$i]->save();*/
                    switch ($alerts[$i]->AlertType) {
                        case 'Global':
                            switch ($areadelusuario->AreaSede) {
                                case 'Planta':
                                    Mail::to($destinatariosGlobal)->queue(new sendAlertNoRealizado($alerts[$i]));
                                    $alerts[$i]->AlertNotification = 5;
                                    $alerts[$i]->save();
                                    break;
                                
                                case 'Bogotá':
                                    Mail::to($destinatariosGlobalBogota)->queue(new sendAlertNoRealizado($alerts[$i]));
                                    $alerts[$i]->AlertNotification = 5;
                                    $alerts[$i]->save();
                                    break;
                                
                                default:
                                    # code...
                                    break;
                            }

                            break;
                        
                        case 'Sede':

                            switch ($areadelusuario->AreaSede) {
                                case 'Planta':
                                    Mail::to($destinatariosSede)->queue(new sendAlertNoRealizado($alerts[$i]));
                                    $alerts[$i]->AlertNotification = 5;
                                    $alerts[$i]->save();
                                    break;
                                
                                case 'Bogotá':
                                    Mail::to($destinatariosSedeBogota)->queue(new sendAlertNoRealizado($alerts[$i]));
                                    $alerts[$i]->AlertNotification = 5;
                                    $alerts[$i]->save();
                                    break;
                                
                                default:
                                    # code...
                                    break;
                            }

                            break;
                        
                        case 'Area':
                            Mail::to($destinatariosArea)->queue(new sendAlertNoRealizado($alerts[$i]));
                            $alerts[$i]->AlertNotification = 5;
                            $alerts[$i]->save();
                            break;
                        
                        default:
                            # code...
                            break;
                    }
                }
            }

            if (($alerts[$i]->AlertDateEvent < today()) && ($alerts[$i]->AlertRealizado == 1)) {
                 $alerts[$i]->delete();
            }
        }
    }
}
