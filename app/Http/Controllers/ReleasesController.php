<?php

namespace App\Http\Controllers;

use App\Releases;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\User;
use App\Mail\ReleaseStored;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Mail;

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
        return view('releases.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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

        $users = User::all('email');
        /*$users = User::find(2);*/
        return $users;

        /*Notification::send($users->email, new MailReleases($releases));*/
        Mail::to($users)->send(new ReleaseStored($releases));

        return redirect()->route('releases.index');
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
        return view('releases.edit', compact('release'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Releases  $releases
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Releases $release)
    {
        $release->update($request->except(['RelSrc']));

        if ($request->hasFile('RelSrc')){
            $path = $request->file('RelSrc')->store('public/Anuncios');
            $release->update(['RelSrc' => $path]);
        }else{
        }

        return redirect()->route('releases.index');
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

        return redirect()->route('releases.index');
    }
}
