<?php

namespace App\Http\Controllers;

use App\Process;
use App\Requisitos;
use App\Documents;
use App\Input;
use App\Output;
use App\Activity;
use App\Indicators;
use App\Areas;

use Spatie\Permission\Models\Role;
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
        $procesos = Process::all();

        // return $procesos;

        return view('process.index', compact('procesos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all(['id', 'name']);
        $areas = Areas::all(['id', 'AreaName']);
        $requisitos = Requisitos::all(['id', 'ReqName']);
        $documentos = Documents::all(['id', 'DocName']);
        $entradas = Input::all(['id', 'InputName']);
        $salidas = Output::all(['id', 'OutputName']);
        $actividades = Activity::all(['id', 'ActiName']);
        $indicadores = Indicators::all(['id', 'IndName']);
        $soportes = Process::all(['id', 'ProcName']);


        return view('process.create', compact(['roles', 'requisitos', 'documentos', 'entradas', 'salidas', 'actividades', 'indicadores', 'soportes', 'areas']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;

        $path = $request->file('ProcImage')->store('public/Procesos');

        // se crea el registro del documento en la base de datos
        $process = new Process();
        $process->ProcName = $request->input('ProcName');
        $process->ProcRevVersion = $request->input('ProcRevVersion');
        $process->ProcChangesDescription = $request->input('ProcChangesDescription');
        $process->ProcObjetivo = $request->input('ProcObjetivo');
        $process->ProcResponsable = $request->input('ProcResponsable');
        $process->ProcAutoridad = $request->input('ProcAutoridad');
        $process->ProcRecursos = $request->input('ProcRecursos');
        $process->ProcRequsitos = $request->input('ProcRequsitos');
        $process->ProcElaboro = $request->input('ProcElaboro');
        $process->ProcReviso = $request->input('ProcReviso');
        $process->ProcAprobo = $request->input('ProcAprobo');
        $process->ProcImage = $path;
        $process->save();

        $process->entradas()->attach($areaid);
        $process->salidas()->attach($areaid);
        $process->actividades()->attach($areaid);
        $process->documentos()->attach($areaid);
        $process->areas()->attach($areaid);
        $process->indicadores()->attach($areaid);
        $process->procesosDeSoporte()->attach($areaid);
        $process->requisitos()->attach($areaid);
        /*$document->assignAreas($areas);*/

        // redireccionamiento al index de documentos
        return redirect()->route('process.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Procesos  $procesos
     * @return \Illuminate\Http\Response
     */
    public function show(Process $process)
    {
        // $procesos = Process::with(['entradas', 'salidas', 'actividades', 'documentos', 'areas', 'indicadores', 'procesosDeSoporte'])->get();

        return view('process.show', compact('process'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Procesos  $procesos
     * @return \Illuminate\Http\Response
     */
    public function edit(Process $procesos)
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
    public function destroy(Process $procesos)
    {
        //
    }
}
