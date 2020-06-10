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
        if (auth()->user()->can('createComites')) {
            return view('comites.create');
        }else{
            abort(403, 'El usuario no se encuentra autorizado para crear comites');
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
        $comite->ComiDateLast = '1576/03/01';
        $comite->ComiObservations = $request->input('ComiObservations');
        $comite->ComiDateNext = $request->input('ComiDateNext');
        $comite->ComiIntegrantes = $request->input('ComiIntegrantes');
        $comite->save();

        return redirect()->route('comites.index')->withStatus(__('Comite creado correctamente'));
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
        if (auth()->user()->can('updateComites')) {
            return view('comites.edit', compact('comite'));
        }else{
            abort(403, 'El usuario no se encuentra autorizado para editar comites');
        }
        
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

        return redirect()->route('comites.index')->withStatus(__('Comite actualizado correctamente'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comites  $comites
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comites $comite)
    {
        if (auth()->user()->can('deleteComites')) {
            $srcActual = $comite->ComiSrc;
            Storage::disk('local')->delete($srcActual);
            $imageActual = $comite->ComiImage;
            Storage::disk('local')->delete($imageActual);
            $comite->delete();

            return redirect()->route('comites.index')->withStatus(__('Comite eliminado correctamente'));
        }else{
            abort(403, 'El usuario no se encuentra autorizado para eliminar comites');
        }
        

    }
}
