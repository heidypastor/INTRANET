<?php

namespace App\Http\Controllers;

use App\Alerts;
use App\Areas;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendAlert;
use App\Mail\sendAlertNoRealizado;
use Spatie\Permission\Models\Role;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;

class AlertsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$alerts = DB::table('alerts')->get();*/
        $alerts = Alerts::with('user')->get();
        /*$alerts = Alerts::with('user')->where('AlertDateNotifi', today())->get();*/ /*Consulta que retorna las alertas del dia presente con su respectivo usuario*/
        // return $alerts;
        return view('alertas.index', compact('alerts'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function calendario()
    {
        $alerts = Alerts::with('user')->get();
        return view('alertas.calendario', compact('alerts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alertas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validatedData = $request->validate([
            'AlertDateEvent' => 'after_or_equal:AlertDateNotifi',
        ], ['AlertDateEvent.after_or_equal' => 'El campo Fecha Evento debe ser una fecha posterior o igual a Fecha de notificación.'
        ]);


        /*return $request;*/
        $alert = new Alerts();
        $alert->AlertName = $request->input('AlertName');
        $alert->AlertDateEvent = $request->input('AlertDateEvent');
        $alert->AlertDescription = $request->input('AlertDescription');
        $alert->AlertDateNotifi = $request->input('AlertDateNotifi');
        $alert->AlertType = $request->input('AlertType');
        $alert->AlertNotification = 0;
        $alert->AlertRealizado = 0;
        $alert->AlertPercentage = 100;
        $alert->user_id = Auth::user()->id;
        $alert->save();

        $usuario = User::where('id', $alert->user_id)->first();
        $areadelusuario = Areas::where('id', $usuario->areas_id)->first();
        $jefearea = User::with(['areas', 'roles' => function ($query) {
            $query->where('name', 'JefeArea');
        }])
        ->role('JefeArea')
        ->where('areas_id', $areadelusuario->id)->first();



        /*$jefearea = User::with(['areas', 'roles' => function ($query) {
            $query->where('name', 'JefeArea');
        }])
        ->whereHas('roles')
        ->where('areas_id', $areadelusuario->id)->get();*/

        /*return $jefearea;*/

        /*$users = User::where('id', $alert->user_id)->get('email');
        Mail::to($users)->send(new sendAlert($alert));*/

        return redirect()->route('alerts.index')->withStatus(__('Alerta creada correctamente'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Alerts  $alerts
     * @return \Illuminate\Http\Response
     */
    public function show(Alerts $alert)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Alerts  $alerts
     * @return \Illuminate\Http\Response
     */
    public function edit(Alerts $alert)
    {
        /*$fechaEvento = date_parse($alert->AlertDateEvent);
        $FechaNotification = date_parse($alert->AlertDateNotifi);*/
        /*$diferencia = $FechaNotification->diff($fechaEvento);*/
        /*$date = $alert->AlertDateEvent->diffInDays($alert->AlertDateNotifi);*/

        // return $alert;
        return view('alertas.edit', compact('alert'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Alerts  $alerts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alerts $alert)
    {
        /*return $request;*/

        $validatedData = $request->validate([
            'AlertDateEvent' => 'after_or_equal:AlertDateNotifi',
        ], ['AlertDateEvent.after_or_equal' => 'El campo Fecha Evento debe ser una fecha posterior o igual a Fecha de notificación.'
        ]);

        $alert->update($request->all());
        return redirect()->route('alerts.index')->withStatus(__('Alerta actualizada correctamente'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Alerts  $alerts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alerts $alert)
    {
        $alert->delete();
        return redirect()->route('alerts.index')->withStatus(__('Alerta eliminada correctamente'));
    }


    /**
     * Enviar correos de alerta.
     *
     * @param  \App\Alerts  $alerts
     * @return \Illuminate\Http\Response
     */
    /*public function sendMail(Alerts $alert)
    {
        $users = User::where('id', $alert->user_id)->get('email');
        Mail::to($users)->send(new sendAlertRealizado($alert));
    }*/
}
