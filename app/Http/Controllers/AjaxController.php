<?php

namespace App\Http\Controllers;
use App\Alerts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AjaxController extends Controller
{
    /*Función para cambiar la fecha de una Alerta Temprana*/
    public function CambioDeFecha($request, $id){
    		/*return $request;*/
    	if ($request->ajax()) {
    		$fecha = date('Y-m-d');
    		$eventos = Alerts::where('id', $id)->first();
    		$eventos->AlertDateEvent = $fecha;
    		$eventos->save();
    		return view('alertas.calendario');
    	}
    }
}
