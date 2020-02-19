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

class AjaxController extends Controller
{
    /*Función para cambiar la fecha de una Alerta Temprana*/
    public function CambioDeFecha(Request $request, $id){
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


            switch ($eventos->AlertType) {
                case 'Global':

                    switch ($areadelusuario->AreaSede) {
                        case 'Planta':
                            Mail::to(['gerencia@prosarc.com.co', $jefearea->email, 'gerenteplanta@prosarc.com.co'])->queue(new sendAlertRealizado($eventos));
                            break;
                        
                        case 'Bogotá':
                            Mail::to(['gerencia@prosarc.com.co', $jefearea->email, 'subgerencia@prosarc.com.co'])->queue(new sendAlertRealizado($eventos));
                            break;
                        
                        default:
                            # code...
                            break;
                    }

                    break;
                
                case 'Sede':

                    switch ($areadelusuario->AreaSede) {
                        case 'Planta':
                            Mail::to([$jefearea->email, 'gerenteplanta@prosarc.com.co'])->queue(new sendAlertRealizado($eventos));
                            break;
                        
                        case 'Bogotá':
                            Mail::to([$jefearea->email, 'subgerencia@prosarc.com.co'])->queue(new sendAlertRealizado($eventos));
                            break;
                        
                        default:
                            # code...
                            break;
                    }

                    break;
                
                case 'Area':
                    Mail::to([$jefearea->email])->queue(new sendAlertRealizado($eventos));
                    break;
                
                default:
                    # code...
                    break;
            }
            return "El evento ha sido realizado";
        }
    }
}
