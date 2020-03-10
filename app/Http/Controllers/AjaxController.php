<?php

namespace App\Http\Controllers;
use App\Alerts;
use App\Areas;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendAlertRealizado;
use App\Http\Controllers\AlertsController;
use Spatie\Permission\Models\Role;
use App\Http\Requests\CambiodefechaRequest;

class AjaxController extends Controller
{
    /*Función para cambiar la fecha de una Alerta Temprana*/
    public function CambioDeFecha(CambiodefechaRequest $request, $id){
            // return $request;
        if ($request->ajax()) {
            $fecha = date('Y-m-d', strtotime(substr($request->Event, 0, -1)));
            $eventos = Alerts::where('id', $id)->first();
            $eventos->AlertDateEvent = $fecha;
            $eventos->AlertNotification = 0;
            $eventos->save();
            // return view('alertas.calendario');
            return "Fecha del evento actualizada";
    	}
    }

    /*Función para cambiar el botn de realizado */

    // public function CambioDeBoton(Request $request, $id){
    //     if ($request->ajax()) {
    //         $eventos = Alerts::where('id', $id)->first();
    //         $eventos->AlertRealizado = 1;
    //         $eventos->save();
    //         return "El evento ha sido realizado";
    //     }
    // }

    public function CambioDeBoton(Request $request, $id){
            /*return $request;*/
        if ($request->ajax()) {
            $eventos = Alerts::where('id', $id)->first();
            $eventos->AlertRealizado = 1;
            $eventos->save();


            $usuario = User::where('id', $eventos->user_id)->first();
            $areadelusuario = Areas::where('id', $usuario->areas_id)->first();
            $jefearea = User::with(['areas', 'roles' => function ($query) {
                $query->where('name', 'JefeArea');
            }])
            ->role('JefeArea')
            ->where('areas_id', $areadelusuario->id)->first();


            if ($jefearea != "") {
                /*Destinatarios Global cuando hay jefe de área*/
                $destinatariosGlobal = (['gerencia@prosarc.com.co', $jefearea->email, 'gerenteplanta@prosarc.com.co']);
                /*Destinatarios Global Bogota cuando hay jefe de área*/
                $destinatariosGlobalBogota = (['gerencia@prosarc.com.co', $jefearea->email, 'subgerencia@prosarc.com.co']);
                /*Destinatarios Sede cuando hay jefe de área*/
                $destinatariosSede = ([$jefearea->email, 'gerenteplanta@prosarc.com.co']);
                /*Destinatarios Sede Bogotá cuando hay jefe de área*/
                $destinatariosSedeBogota = ([$jefearea->email, 'subgerencia@prosarc.com.co']);
                /*Destinatarios por área cuando hay jefe de área*/
                $destinatariosArea = ([$jefearea->email]);

            }else{
                /*Destinatarios Global cuando NO hay jefe de área*/
                $destinatariosGlobal = (['gerencia@prosarc.com.co', 'gerenteplanta@prosarc.com.co']);
                /*Destinatarios Global Bogota cuando NO hay jefe de area*/
                $destinatariosGlobalBogota = (['gerencia@prosarc.com.co', 'subgerencia@prosarc.com.co']);
                /*Destinatarios Sede cuando NO hay jefe de área*/
                $destinatariosSede = (['gerenteplanta@prosarc.com.co']);
                /*Destinatarios Sede Bogotá cuando NO hay jefe de área*/
                $destinatariosSedeBogota = (['subgerencia@prosarc.com.co']);
                /*Destinatarios por área cuando hay NO jefe de área*/
                $destinatariosArea = ([Auth::user()->email]);

            }


            switch ($eventos->AlertType) {
                case 'Global':

                    switch ($areadelusuario->AreaSede) {
                        case 'Planta':
                            Mail::to($destinatariosGlobal)->queue(new sendAlertRealizado($eventos));
                            $eventos->AlertNotification = 4;
                            $eventos->save();
                            break;
                        
                        case 'Bogotá':
                            Mail::to($destinatariosGlobalBogota)->queue(new sendAlertRealizado($eventos));
                            $eventos->AlertNotification = 4;
                            $eventos->save();
                            break;
                        
                        default:
                            # code...
                            break;
                    }

                    break;
                
                case 'Sede':

                    switch ($areadelusuario->AreaSede) {
                        case 'Planta':
                            Mail::to($destinatariosSede)->queue(new sendAlertRealizado($eventos));
                            $eventos->AlertNotification = 4;
                            $eventos->save();
                            break;
                        
                        case 'Bogotá':
                            Mail::to($destinatariosSedeBogota)->queue(new sendAlertRealizado($eventos));
                            $eventos->AlertNotification = 4;
                            $eventos->save();
                            break;
                        
                        default:
                            # code...
                            break;
                    }

                    break;
                
                case 'Area':
                    Mail::to($destinatariosArea)->queue(new sendAlertRealizado($eventos));
                    $eventos->AlertNotification = 4;
                    $eventos->save();
                    break;
                
                default:
                    # code...
                    break;
            }
            return "El evento ha sido realizado";
        }
    }
}
