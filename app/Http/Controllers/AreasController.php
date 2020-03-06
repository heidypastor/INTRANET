<?php

namespace App\Http\Controllers;

use App\Areas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AreasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Areas = DB::table('areas')->get();
        /*$Areas = Areas::with('users')->get();*/
        /*$Areas = Areas::all();*/
        /*return $Areas;*/
        return view('areas.index', compact('Areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*return view('areas.create');*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*return $request;*/
        $area = new Areas();
        $area->AreaName = $request->input('AreaName');
        $area->AreaSede = $request->input('AreaSede');
        $area->save();

        return redirect()->route('areas.index')->withStatus(__('Área creada correctamente'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Areas  $areas
     * @return \Illuminate\Http\Response
     */
    public function show(Areas $areas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Areas  $areas
     * @return \Illuminate\Http\Response
     */
    public function edit(Areas $areas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Areas  $areas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Areas $area)
    {
        /*return $request;*/
        /*$Area = Areas::where($id)->first();
        $Area = new Areas();*/
        $area->update($request->all());
        return redirect()->route('areas.index')->withStatus(__('Área actualizada correctamente'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Areas  $areas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Areas $area)
    {
        /*return $area;*/
        /*$area->delete();
        return redirect()->route('areas.index')->withStatus(__('Área eliminada correctamente'));*/
    }
}
