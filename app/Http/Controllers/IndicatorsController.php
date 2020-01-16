<?php

namespace App\Http\Controllers;

use App\Indicators;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
        
        /*$archivo = $request->file('IndTable');*/


        /*$indicator->create($request->except(['IndGraphic', 'IndTable']));*/
        /*return $indicator;*/


        $path = $request->file('IndGraphic')->store('public/Graphic');

        $pathimg = $request->file('IndTable')->store('public/Archivos');

        /*$indicator->update(['IndGraphic' => $path]);
        $indicator->update(['IndTable' => $pathimg]);*/


        $indicator = new Indicators();
        $indicator->IndName = $request->input('IndName');
        $indicator->IndObjective = $request->input('IndObjective');
        $indicator->IndQueMide = $request->input('IndQueMide');
        $indicator->IndGraphic = $path;
        $indicator->IndTable = $pathimg;
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
        return view('indicators.show', compact('indicator'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Indicators  $indicators
     * @return \Illuminate\Http\Response
     */
    public function edit(Indicators $indicator)
    {
        /*return $indicator;*/
        return view('indicators.edit', compact('indicator'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Indicators  $indicators
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Indicators $indicator)
    {
       /* return $request;*/


       /*if ($request->hasFile('Avatar')){
       $file = $request->file('Avatar');
       $name = time().$file->getClientOriginalName();
       $file->move(public_path().'/images/', $name);
       
       auth()->user()->update(['Avatar' => '/images/'.$name]);

       }*/



        $indicator->update($request->except(['IndGraphic', 'IndTable']));


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


        

        /*$path = $request->file('IndGraphic')->store('public/Graphic');*/
        /*$pathimg = $request->file('IndTable')->store('public/Archivos');*/


        // $indicator->update(['IndGraphic' => $path]);
        // $indicator->update(['IndTable' => $pathimg]);

        return redirect()->route('indicators.index');
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

        $graphicActual = $indicator->IndGraphic;
        Storage::disk('local')->delete($graphicActual);
        $tableActual = $indicator->IndTable;
        Storage::disk('local')->delete($tableActual);
        $indicator->delete();

        return redirect()->route('indicators.index');
    }
}
