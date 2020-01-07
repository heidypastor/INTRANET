<?php

namespace App\Http\Controllers;

use App\Documents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $Documents = DB::table('documents')->get();
       return view('documents.index', compact('Documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('documents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Documents $document)
    {
        /*return $request;*/
        // $Document = new Documents();
        // $Document->DocName = $request->input('DocName');
        // $Document->DocSrc = $request->input('DocSrc');
        // $Document->DocVersion = $request->input('DocVersion');
        // $Document->DocType = $request->input('DocType');
        // $Document->DocPublisher = $request->input('DocPublisher');
        // $Document->save();

        $archivo = $request->file('DocSrc');
        $mime = $archivo->getClientMimeType();
        $nombreorigi = $archivo->getClientOriginalName();
        $tamaño = ($archivo->getSize())/1024;
        $valor = ceil($tamaño);
        /*if ($valor) {
            return "es numero";
        }else{
            return "no es número";
        };*/
        /*return $valor;*/
        // Primero se guarda todo menos el campo del documento
        $document->create($request->except(['DocSrc', 'DocMime', 'DocOriginalName', 'DocSize']));
        // Despues el campo DocSrc se guarda en la variable $path y este se organiza según los nombres del input DocType
        $path = $request->file('DocSrc')->store($request->input('DocType'));
        // Finalmente a la variable $document se actualiza y se le agrega que el campo DocSrc Se le asignan los valores de $path es decir, se actualiza la ruta
        $document->update(['DocSrc' => $path]);
        $document->update(['DocMime' => $mime]);
        $document->update(['DocOriginalName' => $nombreorigi]);
        $document->update(['DocSize' => $valor]);
        return redirect()->route('documents.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Documents  $documents
     * @return \Illuminate\Http\Response
     */
    public function show(Documents $documents)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Documents  $documents
     * @return \Illuminate\Http\Response
     */
    public function edit(Documents $documents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Documents  $documents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Documents $documents)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Documents  $documents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Documents $documents)
    {
        //
    }
}
