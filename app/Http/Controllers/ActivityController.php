<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $actividad = new Activity();
        $actividad->ActiName = $request->input('ActiName');
        $actividad->ActiType = $request->input('ActiType');
        $actividad->save();

        return redirect()->route('proceso.create')->withStatus(__('Actividad creada correctamente'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Actividades  $actividades
     * @return \Illuminate\Http\Response
     */
    public function show(Actividades $actividades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Actividades  $actividades
     * @return \Illuminate\Http\Response
     */
    public function edit(Actividades $actividades)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Actividades  $actividades
     * @return \Illuminate\Http\Response
     */



    public function actualizar(Request $request)
    {
        // return $request;
        $actividad = Activity::find($request->input('idocultoActi'));
        $actividad->ActiName = $request->input('ActiName');
        $actividad->ActiType = $request->input('ActiType');
        $actividad->save();

        return redirect()->route('proceso.create')->withStatus(__('Actividad actualizada correctamente'));
    }



    public function update(Request $request, Activity $actividad)
    {
        $actividad->update($request->all());
        return redirect()->route('proceso.create')->withStatus(__('Actividad actualizada correctamente'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Actividades  $actividades
     * @return \Illuminate\Http\Response
     */
    public function destroy(Activity $actividad)
    {
        if ($actividad->id == 0) {
            return redirect()->route('proceso.create')->withStatus(__('la actividad no fue eliminada... intente nuevamente escogiendo una salida existente'));
        }
        $actividad->delete();

        return redirect()->route('proceso.create')->withStatus(__('Actividad Eliminada correctamente'));
    
    }
}
