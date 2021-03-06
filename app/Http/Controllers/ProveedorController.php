<?php

namespace App\Http\Controllers;

use App\Proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
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
        $proveedor = new Proveedor();
        $proveedor->ProvName = $request->input('ProvName');
        $proveedor->save();
        
        return redirect()->route('proceso.create')->withStatus(__('Proveedor creado correctamente'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show(Proveedor $proveedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit(Proveedor $proveedor)
    {
        //
    }



    public function actualizar(Request $request)
    {
        // return $request;
        $proveedor = Proveedor::find($request->input('idocultoProv'));
        $proveedor->ProvName = $request->input('ProvName');
        $proveedor->save();

        return redirect()->route('proceso.create')->withStatus(__('Proveedor actualizado correctamente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proveedor $proveedor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proveedor $proveedor)
    {
        if ($proveedor->id == 0) {
            return redirect()->route('proceso.create')->withStatus(__('el proveedor no fue eliminado... intente nuevamente escogiendo un proveedor existente'));
        }
        $proveedor->delete();

        return redirect()->route('proceso.create')->withStatus(__('Proveedor Eliminado correctamente'));
    }
}
