<?php

namespace App\Http\Controllers;

use App\Input;
use Illuminate\Http\Request;

class InputController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entrada = new Input();
        $entrada->InputName = $request->input('InputName');
        $entrada->InputType = $request->input('InputType');
        $entrada->save();

        return redirect()->route('proceso.create')->withStatus(__('Entrada creada correctamente'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Entradas  $entradas
     * @return \Illuminate\Http\Response
     */
    public function show(Entradas $entradas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entradas  $entradas
     * @return \Illuminate\Http\Response
     */
    public function edit(Entradas $entradas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entradas  $entradas
     * @return \Illuminate\Http\Response
     */

    public function actualizar(Request $request)
    {
        // return $request;
        $entrada = Input::find($request->input('idoculto'));
        $entrada->InputName = $request->input('InputName');
        $entrada->InputType = $request->input('InputType');
        $entrada->save();

        return redirect()->route('proceso.create')->withStatus(__('Entrada actualizada correctamente'));
    }

    
    public function update(Request $request, Input $entrada)
    {
        /*return $request;*/
        $entrada->update($request->all());
        return redirect()->route('proceso.create')->withStatus(__('Entrada actualizada correctamente'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entradas  $entradas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Input $entrada)
    {
        if ($entrada->id == 0) {
            return redirect()->route('proceso.create')->withStatus(__('la entrada no fue eliminada... intente nuevamente escogiendo una salida existente'));
        }
        $entrada->delete();

        return redirect()->route('proceso.create')->withStatus(__('Entrada Eliminada correctamente'));
    
    }
}
