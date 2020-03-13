<?php

namespace App\Http\Controllers;

use App\Gseguridad;
use Illuminate\Http\Request;

class GseguridadController extends Controller
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
        $gseguridad = new Gseguridad();
        $gseguridad->SeguName = $request->input('SeguName');
        $gseguridad->SeguType = $request->input('SeguType');
        $gseguridad->save();

        return redirect()->route('proceso.create')->withStatus(__('Gestión de Seguridad y Salud en el trabajo creada correctamente'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gseguridad  $gseguridad
     * @return \Illuminate\Http\Response
     */
    public function show(Gseguridad $gseguridad)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gseguridad  $gseguridad
     * @return \Illuminate\Http\Response
     */
    public function edit(Gseguridad $gseguridad)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gseguridad  $gseguridad
     * @return \Illuminate\Http\Response
     */


    public function actualizar(Request $request)
    {
        // return $request;
        $gseguridad = Gseguridad::find($request->input('idocultoGsegu'));
        $gseguridad->SeguName = $request->input('SeguName');
        $gseguridad->SeguType = $request->input('SeguType');
        $gseguridad->save();

        return redirect()->route('proceso.create')->withStatus(__('Gestión de Seguridad y Salud en el Trabajo actualizada correctamente'));
    }


    public function update(Request $request, Gseguridad $gseguridad)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gseguridad  $gseguridad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gseguridad $gseguridad)
    {
        if ($gseguridad->id == 0) {
            return redirect()->route('proceso.create')->withStatus(__('la gestión de seguridad y salud en el trabajo no fue eliminada... intente nuevamente escogiendo una salida existente'));
        }
        $gseguridad->delete();

        return redirect()->route('proceso.create')->withStatus(__('Gestión de Seguridad y Salud en el Trabajo Eliminada correctamente'));
    }
}
