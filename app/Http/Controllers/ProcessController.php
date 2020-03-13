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
use App\Seguimiento;
use App\User;
use App\Cliente;
use App\Proveedor;
use App\Recursos;
use App\Gambiental;
use App\Gseguridad;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProcessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$procesos = Process::all();*/
        $procesos = Process::with('requisitos')->paginate(10);

        /*$requisitos = Requisitos::all(['id', 'ReqName']);*/

        // return $procesos;

        return view('process.index', compact('procesos'/*, 'requisitos'*/));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (auth()->user()->can('createProcess')) {

            $roles = Role::all(['id', 'name']);
            /*$users = User::all(['id', 'name']);*/
            $areas = Areas::all(['id', 'AreaName']);
            $requisitos = Requisitos::all(['id', 'ReqName']);
            $documentos = Documents::all(['id', 'DocName']);
            $entradas = Input::all(['id', 'InputName']);
            $salidas = Output::all(['id', 'OutputName']);
            $actividades = Activity::all(['id', 'ActiName']);
            $indicadores = Indicators::all(['id', 'IndName']);
            $soportes = Process::all(['id', 'ProcName']);
            // $seguimientos = Seguimiento::all(['id', 'SeguiName']);
            $clientes = Cliente::all(['id', 'CliName']);
            $proveedores = Proveedor::all(['id', 'ProvName']);
            $recursos = Recursos::all(['id', 'RecName', 'RecType']);
            $gambientales = Gambiental::all(['id', 'GesName', 'GesType']);
            $gseguridades = Gseguridad::all(['id', 'SeguName', 'SeguType']);

            /* variables para los formularios de destroy */
            $salidasDrop = Output::doesntHave('procesos')->get();
            $entradasDrop = Input::doesntHave('procesos')->get();
            $actividadesDrop = Activity::doesntHave('procesos')->get();
            // $seguimientosDrop = Seguimiento::doesntHave('procesos')->get();
            $clientesDrop = Cliente::doesntHave('procesos')->get();
            $proveedoresDrop = Proveedor::doesntHave('procesos')->get();
            $recursosDrop = Recursos::doesntHave('procesos')->get();
            $gambientalesDrop = Gambiental::doesntHave('procesos')->get();
            $gseguridadesDrop = Gseguridad::doesntHave('procesos')->get();

            $usuario = Auth::user()->id;


            /*return $actividades;*/
            return view('process.create', compact(['proveedoresDrop', 'clientesDrop', 'proveedores', 'clientes', 'roles', 'requisitos', 'documentos', 'entradas', 'salidas', 'actividades', 'indicadores', 'soportes', 'areas', 'salidasDrop', 'entradasDrop', 'actividadesDrop', 'usuario', 'recursos', 'recursosDrop', 'gambientales', 'gambientalesDrop', 'gseguridades', 'gseguridadesDrop']));
        }else{
            abort(403, 'El usuario no se encuentra autorizado para crear Procesos');
        }
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
        $process->ProcElaboro = $request->input('ProcElaboro');
        $process->ProcReviso = $request->input('ProcReviso');
        $process->ProcAprobo = $request->input('ProcAprobo');
        $process->ProcImage = $path;
        $process->ProcDate = $request->input('ProcDate');
        $process->save();

        $process->entradas()->attach($request->input('Entradas'));
        $process->salidas()->attach($request->input('Salidas'));
        $process->actividades()->attach($request->input('Actividades'));
        $process->clientes()->attach($request->input('Clientes'));
        $process->proveedores()->attach($request->input('Provedores'));
        $process->documentos()->attach($request->input('Docs'));
        $process->areas()->attach($request->input('Areas'));
        $process->indicadores()->attach($request->input('Indicadores'));
        $process->procesosDeSoporte()->attach($request->input('Soporte'));
        $process->requisitos()->attach($request->input('ProcRequsitos'));
        // $process->seguimientos()->attach($request->input('Seguimientos'));
        /*$document->assignAreas($areas);*/

        // redireccionamiento al index de documentos
        return redirect()->route('proceso.index')->withStatus(__('Proceso creado correctamente')); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Procesos  $procesos
     * @return \Illuminate\Http\Response
     */
    public function show(Process $proceso)
    {
        $proceso['entradas'] = $proceso->entradas()->get();
        $proceso['salidas'] = $proceso->salidas()->get();
        $proceso['actividades'] = $proceso->actividades()->get();
        $proceso['documentos'] = $proceso->documentos()->get();
        $proceso['areas'] = $proceso->areas()->get();
        $proceso['indicadores'] = $proceso->indicadores()->get();
        $proceso['procesosDeSoporte'] = $proceso->procesosDeSoporte()->get();
        $proceso['requisitos'] = $proceso->requisitos()->get();
        // $proceso['seguimientos'] = $proceso->seguimientos()->get();
        $proceso['clientes'] = $proceso->clientes()->get();
        $proceso['proveedores'] = $proceso->proveedores()->get();

        /*return $proceso;*/
        /*$users = User::all(['id', 'name']);*/
        $responsable = Role::findById($proceso->ProcResponsable);

        $usuario = Auth::user()->id;
        // return $responsable;
        return view('process.show', compact('proceso', 'usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Procesos  $procesos
     * @return \Illuminate\Http\Response
     */
    public function edit(Process $proceso)
    {
        if (auth()->user()->can('updateProcess')) {
            
            $roles = Role::all(['id', 'name']);
            $areas = Areas::all(['id', 'AreaName']);
            $requisitos = Requisitos::all(['id', 'ReqName']);
            $documentos = Documents::all(['id', 'DocName']);
            $entradas = Input::all(['id', 'InputName']);
            $salidas = Output::all(['id', 'OutputName']);
            $actividades = Activity::all(['id', 'ActiName']);
            $indicadores = Indicators::all(['id', 'IndName']);
            $soportes = Process::all(['id', 'ProcName']);
            // $seguimientos = Seguimiento::all(['id', 'SeguiName']);
            $clientes = Cliente::all(['id', 'CliName']);
            $proveedores = Proveedor::all(['id', 'ProvName']);

            /* variables para los formularios de destroy */
            $salidasDrop = Output::doesntHave('procesos')->get();
            $entradasDrop = Input::doesntHave('procesos')->get();
            $actividadesDrop = Activity::doesntHave('procesos')->get();
            // $seguimientosDrop = Seguimiento::doesntHave('procesos')->get();
            $clientesDrop = Cliente::doesntHave('procesos')->get();
            $proveedoresDrop = Proveedor::doesntHave('procesos')->get();

            /*return $proceso->entradas;*/
            return view('process.edit', compact(['proveedoresDrop', 'clientesDrop', 'proveedores', 'clientes', 'roles', 'requisitos', 'documentos', 'entradas', 'salidas', 'actividades', 'indicadores', 'soportes', 'areas', 'salidasDrop', 'entradasDrop', 'actividadesDrop', 'usuario', 'proceso']));

        }else{
            abort(403, 'El usuario no se encuentra autorizado para editar Procesos');
        }


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Procesos  $procesos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Process $proceso)
    {
        $proceso->update($request->all());
        return redirect()->route('proceso.index')->withStatus(__('Proceso actualizado correctamente'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Procesos  $procesos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Process $proceso)
    {
        $proceso->Actividades()->detach();
        $proceso->Areas()->detach();
        $proceso->Documentos()->detach();
        $proceso->Indicadores()->detach();
        $proceso->Entradas()->detach();
        $proceso->Salidas()->detach();
        $proceso->procesosDeSoporte()->detach();
        $proceso->Requisitos()->detach();
        // $proceso->Seguimientos()->detach();
        $proceso->delete();
        return redirect()->route('proceso.index')->withStatus(__('Proceso eliminado correctamente'));
    }
}
