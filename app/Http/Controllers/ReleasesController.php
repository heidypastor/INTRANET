<?php

namespace App\Http\Controllers;

use App\Releases;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Mail\ReleaseStored;
use App\Mail\ReleaseUpdate;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\storeUpdateReleasesRequest;
use Illuminate\Validation\Rule;

class ReleasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $releases = DB::table('releases')->get();
        return view('releases.index', compact('releases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::get();
        /*return $users;*/
        return view('releases.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(storeUpdateReleasesRequest $request)
    {
        $usuarios = $request->input('users');
        /*return $usuarios;*/
        $path = $request->file('RelSrc')->store('public/Anuncios');

        $releases = new Releases();
        $releases->RelName = $request->input('RelName');
        $releases->RelMessage = $request->input('RelMessage');
        $releases->RelType = $request->input('RelType');
        $releases->RelGeneral = $request->input('RelGeneral');
        $releases->RelDate = now();
        $releases->RelSrc = $path;
        $releases->user_id = Auth::user()->id;
        $releases->save();

        // $usuariocreador = $releases->user;
        // $releases['user'] = $usuariocreador;
        /*return $releases;*/

        /*$correos = $releases->areas();*/

        $general = User::all('email');

        if ($releases->RelGeneral == 0) {
            Mail::to($general)->queue(new ReleaseStored($releases));
        }else{
            Mail::to($usuarios)->queue(new ReleaseStored($releases));
        }

        /*Notification::send($users->email, new MailReleases($releases));*/

        return redirect()->route('releases.index')->withStatus(__('Comunicado creado correctamente'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Releases  $releases
     * @return \Illuminate\Http\Response
     */
    public function show(Releases $release)
    {  
        return view('releases.show', compact('release'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Releases  $releases
     * @return \Illuminate\Http\Response
     */
    public function edit(Releases $release)
    {

        if ($release->user_id == Auth::user()->id) {
            $users = User::get();
            return view('releases.edit', compact('release', 'users'));
        }else{
            abort(403, 'El usuario no se encuentra autorizado para editar comunicados');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Releases  $releases
     * @return \Illuminate\Http\Response
     */
    public function update(storeUpdateReleasesRequest $request, Releases $release)
    {



        /*Cambios para envio de correo por el update. NO LOS HE VERIFICADO*/


        $usuarios = $request->input('users');

        $general = User::all('email');

        if ($release->RelGeneral == 0) {
            Mail::to($general)->queue(new ReleaseUpdate($release));
        }else{
            Mail::to($usuarios)->queue(new ReleaseUpdate($release));
        }






        $release->update($request->except(['RelSrc']));

        if ($request->hasFile('RelSrc')){
            $path = $request->file('RelSrc')->store('public/Anuncios');
            $release->update(['RelSrc' => $path]);
        }else{
        }

        return redirect()->route('releases.index')->withStatus(__('Comunicado actualizado correctamente'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Releases  $releases
     * @return \Illuminate\Http\Response
     */
    public function destroy(Releases $release)
    {
        $comunicadoActual = $release->IndGraphic;
        Storage::disk('local')->delete($comunicadoActual);
        $release->delete();

        return redirect()->route('releases.index')->withStatus(__('Comunicado eliminado correctamente'));
    }
}
