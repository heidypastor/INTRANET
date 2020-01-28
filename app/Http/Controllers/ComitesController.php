<?php

namespace App\Http\Controllers;

use App\Comites;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ComitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$comites = DB::table('comites')->get();*/
        $comites = Comites::all();
        /*$comites = User::with('comites')->get();*/

        /*return $comites;*/
        return view('comites.index', compact('comites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comites.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $path = $request->file('ComiSrc')->store('public/Comites');

        $pathimg = $request->file('ComiImage')->store('public/Comites');


        /*return $request;*/
        $comite = new Comites();
        $comite->ComiName = $request->input('ComiName');
        $comite->ComiSrc = $path;
        $comite->ComiImage = $pathimg;
        $comite->ComiParaQueSirve = $request->input('ComiParaQueSirve');
        $comite->ComiTelefono = $request->input('ComiTelefono');
        $comite->ComiEmail = $request->input('ComiEmail');
        $comite->ComiDateLast = $request->input('ComiDateLast');
        $comite->ComiObservations = $request->input('ComiObservations');
        $comite->ComiDateNext = $request->input('ComiDateNext');
        $comite->save();

        return redirect()->route('comites.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comites  $comites
     * @return \Illuminate\Http\Response
     */
    public function show(Comites $comite)
    {
        /*$integrantes = Comites::find($comite->id)->users()->get();*/
        $integrantes = $comite->users()->get();
        /*return $integrantes;*/
        return view('comites.show', compact('comite', 'integrantes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comites  $comites
     * @return \Illuminate\Http\Response
     */
    public function edit(Comites $comite)
    {
        return view('comites.edit', compact('comite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comites  $comites
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comites $comite)
    {

       /*return $request;*/
        $comite->update($request->except(['ComiSrc', 'ComiImage']));


        if ($request->hasFile('ComiSrc')){
            $path = $request->file('ComiSrc')->store('public/Comites');
            $comite->update(['ComiSrc' => $path]);
        }else{
           
        }


        if ($request->hasFile('ComiImage')){
            $pathimg = $request->file('ComiImage')->store('public/Comites');
            $comite->update(['ComiImage' => $pathimg]);
        }else{
            
        }

        return redirect()->route('comites.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comites  $comites
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comites $comite)
    {
        $srcActual = $comite->ComiSrc;
        Storage::disk('local')->delete($srcActual);
        $imageActual = $comite->ComiImage;
        Storage::disk('local')->delete($imageActual);
        $comite->delete();

        return redirect()->route('comites.index');

    }
}
