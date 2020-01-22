<?php

namespace App\Http\Controllers;

use App\Process;
use Illuminate\Http\Request;

class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procesos = Process::with(['entradas', 'salidas', 'actividades', 'documentos', 'areas', 'indicadores', 'procesosDeSoporte'])->get();

        return $procesos;

        return view('process.index', compact('procesos'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Procesos  $procesos
     * @return \Illuminate\Http\Response
     */
    public function show(Procesos $procesos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Procesos  $procesos
     * @return \Illuminate\Http\Response
     */
    public function edit(Procesos $procesos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Procesos  $procesos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Procesos $procesos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Procesos  $procesos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Procesos $procesos)
    {
        //
    }
}
