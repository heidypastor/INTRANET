<?php

namespace App\Http\Controllers;

use App\Requisitos;
use App\Areas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequisitosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requisitos = Requisitos::with('areas')->paginate(10);
        /*return $requisitos;*/
        return view('requisitos.index', compact('requisitos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (auth()->user()->can('createRequisito')) {
            $areas = Areas::get();
            $todasAreas = Areas::get(['id', 'AreaName']);
            /*explode ( $delimitador , $string [, $limite ] )*/
            /*return $todasAreas;*/
            return view('requisitos.create', compact(['areas', 'todasAreas']));
        }else{
            abort(403, 'El usuario no se encuentra autorizado para crear requisitos');
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
        /*$areaid = $request->input('areas');*/
        foreach ($request->input('areas') as $key => $value) {
            if ($value == null) {
                $areaid = Areas::get('id');
                break;
            }else{
                $areaid = $request->input('areas');
            }
        }

        /*El foreach de arriba es que el que manda un array de todas lasáreas en el option de areas llamado Todas las áreas*/


        if ($request->hasFile('ReqSrc')) {
            $path = $request->file('ReqSrc')->store('public/'.'Requisitos');
        }else{
            $path = "N";
        }

        if ($request->ReqLink != "") {
            $Link = $request->input('ReqLink');;
        }else{
            $Link = "N";
        }

        $requisito = new Requisitos();
        $requisito->ReqName = $request->input('ReqName');
        $requisito->ReqType = $request->input('ReqType');
        $requisito->ReqDate = $request->input('ReqDate');
        $requisito->ReqEnte = $request->input('ReqEnte');
        $requisito->ReqQueDice = $request->input('ReqQueDice');
        $requisito->ReqSrc = $path;
        $requisito->ReqLink = $Link;
        $requisito->save();

        $requisito->areas()->attach($areaid);

        return redirect()->route('requisitos.index')->withStatus(__('Requisito y documento legal creado correctamente'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Requisitos  $requisitos
     * @return \Illuminate\Http\Response
     */
    public function show(Requisitos $requisitos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Requisitos  $requisitos
     * @return \Illuminate\Http\Response
     */
    public function edit(Requisitos $requisito)
    {
        if (auth()->user()->can('updateRequisito')) {
            $areas = Areas::get();
            /*$todasAreas = Areas::get(['id', 'AreaName']);*/
            /*$array = in_array($todasAreas);
            return $array;*/

            return view('requisitos.edit', compact('requisito', 'areas'));
        }else{
            abort(403, 'El usuario no se encuentra autorizado para editar requisitos');
        }

        
    }

    /**e
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Requisitos  $requisitos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Requisitos $requisito)
    {
        /*$areas = array($request->areas);*/

        foreach ($request->input('areas') as $key => $value) {
            if ($value == null) {
                $areaid = Areas::get('id');
                break;
            }else{
                $areaid = $request->input('areas');
            }
        }


        $requisito->update($request->all());
        /*return $request;*/

        /*$areaid = $request->input('areas');*/

        $requisito->areas()->sync($areaid);

        return redirect()->route('requisitos.index')->withStatus(__('Requisito y documento legal actualizado correctamente'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Requisitos  $requisitos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requisitos $requisito)
    {
        if (auth()->user()->can('deleteRequisito')) {
            $requisito->Areas()->detach();
            $requisito->delete();
            return redirect()->route('requisitos.index')->withStatus(__('Requisito y documento legal eliminado correctamente'));
        }else{
            abort(403, 'El usuario no se encuentra autorizado para eliminar requisitos');
        }
    }
}
