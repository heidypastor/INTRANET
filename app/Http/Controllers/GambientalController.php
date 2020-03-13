<?php

namespace App\Http\Controllers;

use App\Gambiental;
use Illuminate\Http\Request;

class GambientalController extends Controller
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
        $gambiental = new Gambiental();
        $gambiental->GesName = $request->input('GesName');
        $gambiental->GesType = $request->input('GesType');
        $gambiental->save();

        return redirect()->route('proceso.create')->withStatus(__('Gestión Ambiental creada correctamente'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gambiental  $gambiental
     * @return \Illuminate\Http\Response
     */
    public function show(Gambiental $gambiental)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gambiental  $gambiental
     * @return \Illuminate\Http\Response
     */
    public function edit(Gambiental $gambiental)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gambiental  $gambiental
     * @return \Illuminate\Http\Response
     */



    public function actualizar(Request $request)
    {
        $gambiental = Gambiental::find($request->input('idocultoGambi'));
        /*return $gambiental;*/
        $gambiental->GesName = $request->input('GesName');
        $gambiental->GesType = $request->input('GesType');
        $gambiental->save();

        return redirect()->route('proceso.create')->withStatus(__('Gestión Ambiental actualizada correctamente'));
    }



    public function update(Request $request, Gambiental $gambiental)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gambiental  $gambiental
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gambiental $gambiental)
    {
        if ($gambiental->id == 0) {
            return redirect()->route('proceso.create')->withStatus(__('la gestión ambiental no fue eliminada... intente nuevamente escogiendo una salida existente'));
        }
        $gambiental->delete();

        return redirect()->route('proceso.create')->withStatus(__('Gestión Ambiental Eliminada correctamente'));
    }
}
