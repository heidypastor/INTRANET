<?php

namespace App\Http\Controllers;

use App\Documents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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
    public function store(Request $request)
    {
        /*return $request;*/
        $path = $request->file('DocSrc')->store($request->input('DocType'));
        

        $archivo = $request->file('DocSrc');
        /*$mime = Storage::mimeType($path);*/
        $mime = $archivo->getClientMimeType();
        $nombreorigi = $archivo->getClientOriginalName();
        $tamaño = ceil(($archivo->getClientSize())/1024);

       /* return $mime;*/

        /*$tamaño = ceil(($archivo->getSize())/1024);*/

        /*if ($valor) {
            return "es numero";
        }else{
            return "no es número";
        };*/
        /*return $valor;*/

        
        /*$document->create($request->except(['DocSrc', 'DocMime', 'DocOriginalName', 'DocSize']));*/


        $Document = new Documents();
        $Document->DocName = $request->input('DocName');
        $Document->DocVersion = $request->input('DocVersion');
        $Document->DocType = $request->input('DocType');
        $Document->DocPublisher = $request->input('DocPublisher');
        $Document->DocGeneral = $request->input('DocGeneral');
        $Document->DocSrc = $path;
        $document->DocMime = $mime;
        $document->DocOriginalName = $nombreorigi;
        $document->DocSize = $tamaño;
        $Document->save();


        /*$document->update(['DocSrc' => $path]);
        $document->update(['DocMime' => $mime]);
        $document->update(['DocOriginalName' => $nombreorigi]);
        $document->update(['DocSize' => $valor]);*/
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
    public function edit($id)
    {
        /*return $id;*/
        /*$Documents = Document::where($id)->first();*/
        $Documents = DB::table('documents')->get();
        /*return $Documents;*/
        return view('documents.edit', compact('Documents'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Documents  $documents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Documents $document)
    {
        /*return $document;*/
        /*$tratamiento = Tratamiento::find($id);*/
        $document->update($request->all());
        return redirect()->route('documents.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Documents  $documents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Documents $documents)
    {
        $documents->delete();
        return redirect()->route('documents.index');
    }
}
