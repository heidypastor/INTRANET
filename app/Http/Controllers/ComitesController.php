<?php

namespace App\Http\Controllers;

use App\Comites;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComitesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comites = DB::table('comites')->get();
        return view('comites.index', compact('comites'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comites  $comites
     * @return \Illuminate\Http\Response
     */
    public function show(Comites $comites)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comites  $comites
     * @return \Illuminate\Http\Response
     */
    public function edit(Comites $comites)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comites  $comites
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comites $comites)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comites  $comites
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comites $comites)
    {
        //
    }
}
