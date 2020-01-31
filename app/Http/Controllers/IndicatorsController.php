<?php

namespace App\Http\Controllers;

use App\Indicators;
use App\Areas;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

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

        $Indicators = Indicators::with('user')->get();
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
    public function store(Request $request)
    {
        /*$indicator->create($request->except(['IndGraphic', 'IndTable']));*/
        /*return $request;*/
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
        $indicator->IndType = $request->input('IndType');
        $indicator->user_id =  Auth::user()->id;
        $indicator->save();

        $user = User::find($indicator->user_id);
        $area = Areas::where('id', $user->areas_id)->get();
        /*return $area;*/
        $indicator->areas()->attach($area);


        if ($indicator->IndType === 0) {
            return redirect()->route('indicators.index');
        } else {
            return redirect()->route('indicators.index2');
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
