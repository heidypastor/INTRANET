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
        $areas = Areas::get();
        return view('requisitos.create', compact('areas'));
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
        $areaid = $request->input('areas');

        $requisito = new Requisitos();
        $requisito->ReqName = $request->input('ReqName');
        $requisito->ReqType = $request->input('ReqType');
        $requisito->ReqDate = $request->input('ReqDate');
        $requisito->ReqEnte = $request->input('ReqEnte');
        $requisito->ReqQueDice = $request->input('ReqQueDice');
        $requisito->save();

        $requisito->areas()->attach($areaid);

        return redirect()->route('requisitos.index');
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
        $areas = Areas::get();
        return view('requisitos.edit', compact('requisito', 'areas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Requisitos  $requisitos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Requisitos $requisito)
    {
        $requisito->update($request->all());

        $areaid = $request->input('areas');
        $requisito->areas()->attach($areaid);

        return redirect()->route('requisitos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Requisitos  $requisitos
     * @return \Illuminate\Http\Response
     */
    public function destroy(Requisitos $requisito)
    {
        $requisito->delete();
        return redirect()->route('requisitos.index');
    }
}
