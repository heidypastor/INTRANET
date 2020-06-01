<?php

namespace App\Http\Controllers;

use App\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $cliente = new Cliente();
        $cliente->CliName = $request->input('CliName');
        $cliente->CliType = $request->input('CliType');
        $cliente->save();
        
        return redirect()->route('proceso.create')->withStatus(__('Cliente creado correctamente'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $cliente)
    {
        //
    }


    public function actualizar(Request $request)
    {
        // return $request;
        $cliente = Cliente::find($request->input('idocultoCli'));
        $cliente->CliName = $request->input('CliName');
        $cliente->CliType = $request->input('CliType');
        $cliente->save();

        return redirect()->route('proceso.create')->withStatus(__('Cliente actualizado correctamente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cliente $cliente)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        if ($cliente->id == 0) {
            return redirect()->route('proceso.create')->withStatus(__('el cliente no fue eliminado... intente nuevamente escogiendo un cliente existente'));
        }
        $cliente->delete();

        return redirect()->route('proceso.create')->withStatus(__('Cliente Eliminado correctamente'));
    }
}
