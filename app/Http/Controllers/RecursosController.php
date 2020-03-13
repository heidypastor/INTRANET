<?php

namespace App\Http\Controllers;

use App\Recursos;
use Illuminate\Http\Request;

class RecursosController extends Controller
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
        $recurso = new Recursos();
        $recurso->RecName = $request->input('RecName');
        $recurso->RecType = $request->input('RecType');
        $recurso->save();

        return redirect()->route('proceso.create')->withStatus(__('Recurso creado correctamente'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Recursos  $recursos
     * @return \Illuminate\Http\Response
     */
    public function show(Recursos $recursos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recursos  $recursos
     * @return \Illuminate\Http\Response
     */
    public function edit(Recursos $recursos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recursos  $recursos
     * @return \Illuminate\Http\Response
     */


    public function actualizar(Request $request)
    {
        // return $request;
        $recurso = Recursos::find($request->input('idocultoRec'));
        $recurso->RecName = $request->input('RecName');
        $recurso->RecType = $request->input('RecType');
        $recurso->save();

        return redirect()->route('proceso.create')->withStatus(__('Recurso actualizado correctamente'));
    }



    public function update(Request $request, Recursos $recursos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recursos  $recursos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recursos $recurso)
    {
        if ($recurso->id == 0) {
            return redirect()->route('proceso.create')->withStatus(__('el recurso no fue eliminado... intente nuevamente escogiendo una salida existente'));
        }
        $recurso->delete();

        return redirect()->route('proceso.create')->withStatus(__('Recurso Eliminado correctamente'));
    }
}
