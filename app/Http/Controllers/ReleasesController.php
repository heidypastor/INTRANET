<?php

namespace App\Http\Controllers;

use App\Releases;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $releases->RelDate = ;
        $releases->RelSrc = $path;
        $releases->user_id = Auth::user()->id;
        $releases->save();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Releases  $releases
     * @return \Illuminate\Http\Response
     */
    public function show(Releases $releases)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Releases  $releases
     * @return \Illuminate\Http\Response
     */
    public function edit(Releases $releases)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Releases  $releases
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Releases $releases)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Releases  $releases
     * @return \Illuminate\Http\Response
     */
    public function destroy(Releases $releases)
    {
        //
    }
}
