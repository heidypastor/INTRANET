<?php

namespace App\Http\Controllers;

use App\Indicators;
use App\Areas;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\storeUpdateIndicatorsRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;


class IndicatorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$indicators = Indicators::with('user.areas')->get();*/
        /*$users = User::with('areas')->get();*/
        /*return $indicators;*/

        $Indicators = Indicators::with('user')->orderBy('updated_at', 'desc')->get();
        /*return $Indicators;*/

        // $indicadorconarea = $Indicators->map(function ($item){
        //     $area = Areas::find($item->user->areas_id);

        //     $item->arearelacionada = $area;
        //     return $item;
        // });

        /*return $indicadorconarea;*/
        /*$Areas = Areas::with('users')->get();*/
        return view('indicators.index', compact('Indicators'));
    }

    public function index2()
    {
        $Indicators = Indicators::with('user.areas')->get();

        /*$usuario = User::find($indicator->user_id);
        $area = Areas::find($usuario->areas_id);*/
        /*return $Indicators;*/

        return view('indicators.index2', compact('Indicators'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('indicators.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeUpdateIndicatorsRequest $request)
    {
        /*$indicator->create($request->except(['IndGraphic', 'IndTable']));*/
        // return $request;
        $path = $request->file('IndGraphic')->store('public/Graphic');
        $pathimg = $request->file('IndTable')->store('public/Archivos');
        $pathAnalisis = $request->file('IndAnalysis')->store('public/Graphic');
        /*$indicator->update(['IndGraphic' => $path]);
        $indicator->update(['IndTable' => $pathimg]);*/

        $indicator = new Indicators();
        $indicator->IndName = $request->input('IndName');
        $indicator->IndObjective = $request->input('IndObjective');

        if ($request->filled('IndDescripcion')) {
            $indicator->IndDescripcion = $request->input('IndDescripcion');
        }else{
            $indicator->IndDescripcion = 'Sin definir';
        }
        if ($request->filled('IndFormula')) {
            $indicator->IndFormula = $request->input('IndFormula');
        }else{
            $indicator->IndFormula = 'Sin definir';
        }
        if ($request->filled('IndFicha')) {
            $indicator->IndFicha = $request->input('IndFicha');
        }else{
            $indicator->IndFicha = 'Sin definir';
        }
        if ($request->filled('IndMeta')) {
            $indicator->IndMeta = $request->input('IndMeta');
        }else{
            $indicator->IndMeta = 'Sin definir';
        }
        
        $indicator->IndFrecuencia = $request->input('IndFrecuencia');
        $indicator->IndGraphic = $path;
        $indicator->IndTable = $pathimg;
        $indicator->IndAnalysis = $pathAnalisis;
        // $indicator->IndDateFrom = $request->input('IndDateFrom');
        // $indicator->IndDateUntil = $request->input('IndDateUntil');
        $indicator->IndType = $request->input('IndType');
        $indicator->IndEfe = $request->input('IndEfe');
        $indicator->user_id =  Auth::user()->id;
        $indicator->save();

        $user = User::find($indicator->user_id);
        $area = Areas::where('id', $user->areas_id)->get();
        /*return $area;*/
        $indicator->areas()->attach($area);


        if ($indicator->IndType == 0) {
            return redirect()->route('indicators.index')->withStatus(__('Indicador creado correctamente'));
        } else {
            return redirect()->route('indicators.index2')->withStatus(__('Indicador creado correctamente'));
        } 
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Indicators  $indicators
     * @return \Illuminate\Http\Response
     */
    public function show(Indicators $indicator)
    {
        /*return $indicator;*/
        $usuario = User::find($indicator->user_id);
        $area = Areas::find($usuario->areas_id);
        /*$area = Areas::find($indicator->user_id);*/
        /*$area = Indicators::with('User.areas')->where($indicator->id)->get();*/
        /*return $area;*/
        return view('indicators.show', compact('indicator', 'area'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Indicators  $indicators
     * @return \Illuminate\Http\Response
     */
    public function edit(Indicators $indicator)
    {
        // return $indicator;
        return view('indicators.edit', compact('indicator'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Indicators  $indicators
     * @return \Illuminate\Http\Response
     */
    public function update(storeUpdateIndicatorsRequest $request, Indicators $indicator)
    {
        $indicator->update($request->except(['IndGraphic', 'IndTable', 'IndAnalysis', 'IndDescripcion', 'IndFormula', 'IndFicha', 'IndMeta']));

        
        if ($request->filled('IndDescripcion')) {
            $indicator->IndDescripcion = $request->input('IndDescripcion');
        }else{
            $indicator->IndDescripcion = 'Sin definir';
        }
        if ($request->filled('IndFormula')) {
            $indicator->IndFormula = $request->input('IndFormula');
        }else{
            $indicator->IndFormula = 'Sin definir';
        }
        if ($request->filled('IndFicha')) {
            $indicator->IndFicha = $request->input('IndFicha');
        }else{
            $indicator->IndFicha = 'Sin definir';
        }
        if ($request->filled('IndMeta')) {
            $indicator->IndMeta = $request->input('IndMeta');
        }else{
            $indicator->IndMeta = 'Sin definir';
        }

        if ($request->hasFile('IndGraphic')){
            $path = $request->file('IndGraphic')->store('public/Graphic');
            $indicator->update(['IndGraphic' => $path]);
        }else{
        }

        if ($request->hasFile('IndTable')){
            $pathimg = $request->file('IndTable')->store('public/Archivos');
            $indicator->update(['IndTable' => $pathimg]);
        }else{
        }
        
        if ($request->hasFile('IndAnalysis')){
            $pathAnalisis = $request->file('IndAnalysis')->store('public/Graphic');
            $indicator->update(['IndAnalysis' => $pathAnalisis]);
        }else{
        }

        if ($indicator->IndType === 0) {
            return redirect()->route('indicators.index')->withStatus(__('Indicador actualizado correctamente'));
        } else {
            return redirect()->route('indicators.index2')->withStatus(__('Indicador actualizado correctamente'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Indicators  $indicators
     * @return \Illuminate\Http\Response
     */
    public function destroy(Indicators $indicator)
    {
        /*$indicator->delete();*/
        $indicator->Areas()->detach();
        

        $graphicActual = $indicator->IndGraphic;
        Storage::disk('local')->delete($graphicActual);
        $tableActual = $indicator->IndTable;
        Storage::disk('local')->delete($tableActual);
        $indicator->delete();


        if ($indicator->IndType === 0) {
            return redirect()->route('indicators.index')->withStatus(__('Indicador eliminado correctamente'));
        } else {
            return redirect()->route('indicators.index2')->withStatus(__('Indicador eliminado correctamente'));
        }
        /*return redirect()->route('indicators.index')->withStatus(__('Indicador eliminado correctamente'));*/
    }
}
