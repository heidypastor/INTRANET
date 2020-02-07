<?php

namespace App\Http\Controllers;
use App\Alerts;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    public function CambioDeFecha($request, $id){
    		return $request;
    	if ($request->ajax()) {
    		$fecha = date('Y-m-d', strtotime(substr($request->Event, 0, -1)));
    		$eventos = ProgramacionVehiculo::where('id', $id)->first();
    		$eventos->AlertsDateEvent = $fecha;
    		$eventos->save();
    		return view('alertas.calendario');
    	}
    }
}
