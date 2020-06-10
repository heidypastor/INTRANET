<?php

namespace App\Http\Controllers;

use App\Output;
use Illuminate\Http\Request;

class OutputController extends Controller
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
        $salida = new Output();
        $salida->OutputName = $request->input('OutputName');
        $salida->OutputType = $request->input('OutputType');
        $salida->save();

        return redirect()->route('proceso.create')->withStatus(__('Salida creada correctamente'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Salidas  $salidas
     * @return \Illuminate\Http\Response
     */
    public function show(Salidas $salidas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Salidas  $salidas
     * @return \Illuminate\Http\Response
     */
    public function edit(Salidas $salidas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Salidas  $salidas
     * @return \Illuminate\Http\Response
     */


    public function actualizar(Request $request)
    {
        // return $request;
        $salida = Output::find($request->input('idocultoSali'));
        $salida->OutputName = $request->input('OutputName');
        $salida->OutputType = $request->input('OutputType');
        $salida->save();

        return redirect()->route('proceso.create')->withStatus(__('Salida actualizada correctamente'));
    }



    public function update(Request $request, Output $salida)
    {
        /*return $request;*/
        $salida->update($request->all());
        return redirect()->route('proceso.create')->withStatus(__('Salida actualizada correctamente'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Salidas  $salidas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Output $salida)
    {
        if ($salida->id == 0) {
            return redirect()->route('proceso.create')->withStatus(__('la salida no fue eliminada... intente nuevamente escogiendo una salida existente'));
        }
        $salida->delete();

        return redirect()->route('proceso.create')->withStatus(__('Salida Eliminada correctamente'));
    }
}
