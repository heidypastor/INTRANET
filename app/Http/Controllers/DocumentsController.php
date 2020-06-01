<?php

namespace App\Http\Controllers;

use App\Documents;
use App\Areas;
use App\User;
/*use App\User;*/
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
/*use Spatie\Permission\Models\User;*/

class DocumentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       /*$Documents = DB::table('documents')->get();*/
       $Documents = Documents::with('areas')->paginate(10);
       $publicadodocumentos = Documents::where('DocPublisher', 1)->get();/*Muestra los publicados*/
       /*return $borradordocumentos;*/
       /*return $Documents;*/
       $user = User::where('id', [1, 2, 22])->first();
       $user->givePermissionTo('indexDocuments');
       /*$users = User::with('roles')->paginate(10);*/


       return view('documents.index', compact('Documents', 'publicadodocumentos', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $permisos = Auth::user()->getPermissionsViaRoles();
        // $array = (array) $permisos;
        // return $array;

        $user = User::where('id', '22')->first();
        $user->givePermissionTo('createDocuments');

        if (auth()->user()->can('createDocuments')) {
            # code...
            $areas = Areas::get();
            /*$areas = Documents::with('areas')->get();*/
            /*return $areas;*/
            return view('documents.create', compact('areas'));
        }else{
            abort(403, 'El usuario no se encuentra autorizado para crear documentos');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Documents $document)
    {
        /*$areas = Areas::whereIn('id', $request->input('areas'))->get();*/
        if ($request->input('DocGeneral') == 1) {
            $areaid = Areas::pluck('id');
        }else{
            $areaid = $request->input('areas');
        }
       
        // se almacena el archivo
        $path = $request->file('DocSrc')->store('public/'.$request->input('DocType'));

        // se extraen los metadotos
        $archivo = $request->file('DocSrc');
        $mime = $archivo->getClientMimeType();
        $nombreorigi = $archivo->getClientOriginalName();
        $tamaño = ceil(($archivo->getClientSize())/1024);

        // se crea el registro del documento en la base de datos
        $document = new Documents();
        $document->DocName = $request->input('DocName');
        $document->DocVersion = $request->input('DocVersion');
        $document->DocCodigo  = $request->input('DocCodigo ');
        $document->DocType = $request->input('DocType');
        $document->DocPublisher = $request->input('DocPublisher');
        $document->DocGeneral = $request->input('DocGeneral');
        $document->DocSrc = $path;
        $document->DocMime = $mime;
        $document->DocOriginalName = $nombreorigi;
        $document->DocSize = $tamaño;
        $document->users_id = Auth::user()->id;
        $document->save();

        $document->areas()->attach($areaid);
        /*$document->assignAreas($areas);*/

        // redireccionamiento al index de documentos
        return redirect()->route('documents.index')->withStatus(__('Documento creado correctamente')); 
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
    public function edit(Documents $document)
    {
        $user = User::where('id', '22')->first();
        $user->givePermissionTo('updateDocuments');
        if (auth()->user()->can('updateDocuments')) {
            $areas = Areas::get();
            /*return $document->areas;*/
            return view('documents.edit', compact('document', 'areas'));
        }else{
            abort(403, 'El usuario no se encuentra autorizado para crear documentos');
        }
        
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
        if ($request->input('DocGeneral') == 1) {
            $areaid = Areas::pluck('id');
        }else{
            $areaid = $request->input('areas');
        }
        // return $areaid;
        if ($request->hasFile('DocSrc')) {
            $docActual = $document->DocSrc;
            Storage::disk('local')->delete($docActual);

            $path = $request->file('DocSrc')->store('public/'.$request->input('DocType'));

            $archivo = $request->file('DocSrc');
            $mime = $archivo->getClientMimeType();
            $nombreorigi = $archivo->getClientOriginalName();
            $tamaño = ceil(($archivo->getClientSize())/1024);
            

            $document->update([
                'DocName' => $request->input('DocName'), 
                'DocSrc' => $path, 
                'DocVersion' => $request->input('DocVersion'), 
                'DocCodigo' => $request->input('DocCodigo'), 
                'DocType' => $request->input('DocType'), 
                'DocMime' => $mime, 
                'DocOriginalName' => $nombreorigi, 
                'DocSize' => $tamaño, 
                'DocGeneral' => $request->input('DocGeneral'), 
                'DocPublisher' => $request->input('DocPublisher'), 
                'users_id' => auth()->user()->id,
            ]);
        }else{
            $document->update($request->except('DocSrc'));
        }

        $document->areas()->sync($areaid);
        
        return redirect()->route('documents.index')->withStatus(__('Documento actualizado correctamente'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Documents  $documents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Documents $document)
    {
        $document->Areas()->detach();
        $docActual = $document->DocSrc;
        Storage::disk('local')->delete($docActual);
        $document->delete();
        return redirect()->route('documents.index')->withStatus(__('Documento eliminado correctamente'));
    }
}
