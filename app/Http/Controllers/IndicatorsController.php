<?php

namespace App\Http\Controllers;

use App\Indicators;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IndicatorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Indicators = Indicators::with('areas')->get();
        /*return $Indicators;*/
        /*$Areas = Areas::with('users')->get();*/
        return view('indicators.index', compact('Indicators'));
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
    public function store(Request $request)
    {
        /*return $request;*/

        /*$imagen = $request->file('IndGraphic');*/
        
        $archivo = $request->file('IndTable');


        /*$indicator->create($request->except(['IndGraphic', 'IndTable']));*/
        /*return $indicator;*/

        
        $path = $request->file('IndGraphic')->store('Graphic');

        /*$pathimg = $request->file('IndTable')->store();*/

        /*$indicator->update(['IndGraphic' => $path]);
        $indicator->update(['IndTable' => $pathimg]);*/


        $indicator = new Indicators();
        $indicator->IndName = $request->input('IndName');
        $indicator->IndObjective = $request->input('IndObjective');
        $indicator->IndQueMide = $request->input('IndQueMide');
        $indicator->IndGraphic = $path;
        $indicator->IndTable = $archivo;
        $indicator->IndAnalysis = $request->input('IndAnalysis');
        $indicator->IndDateFrom = $request->input('IndDateFrom');
        $indicator->IndDateUntil = $request->input('IndDateUntil');
        $indicator->save();

        return redirect()->route('indicators.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Indicators  $indicators
     * @return \Illuminate\Http\Response
     */
    public function show(Indicators $indicator)
    {
        /*$cita = Cita::where("slug","=",$slug)->firstOrFail();
        return view("Citas.show", compact("cita"));*/
        /*return $indicator;*/

        /* $Indicators = Indicators::where("id","=",$id)->firstOrFail();*/
        /*$Indicators = Indicators::with('areas')->get();*/
        // $Areas = DB::table('areas')->get();
        /*$Indicators = DB::table('indicators')->get();*/

        /*return $Indicators;*/
        return view('indicators.show', compact('indicator'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Indicators  $indicators
     * @return \Illuminate\Http\Response
     */
    public function edit(Indicators $indicators)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Indicators  $indicators
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Indicators $indicators)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Indicators  $indicators
     * @return \Illuminate\Http\Response
     */
    public function destroy(Indicators $indicators)
    {
        //
    }
}
