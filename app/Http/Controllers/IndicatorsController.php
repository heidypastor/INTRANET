<?php

namespace App\Http\Controllers;

use App\Indicators;
use Illuminate\Http\Request;

class IndicatorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return view('indicators.index');
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
     * @param  \App\Indicators  $indicators
     * @return \Illuminate\Http\Response
     */
    public function show(Indicators $indicators)
    {
        //
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
