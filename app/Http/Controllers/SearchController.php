<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\User;
use App\Areas;
use App\Documents;
use App\Indicators;
use App\Releases;


class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchAllModels(Request $request, $search)
    {
    	if ($request->ajax()) {
    		// consultas en los diferentes modelos segun el termino de busqueda
			$users = User::with('roles')->where('name', $search)->get();
			$documents = Documents::where('DocName', $search)->get();
			$indicators = Indicators::where('IndName', $search)->get();
			$releases = Releases::where('RelName', $search)->get();
			// $procesos = Proceso::with('Area')->where('name', $search)->get();

			// se crea el array de resultado
			$resultado['users']=$users;
			$resultado['documents']=$documents;
			$resultado['indicators']=$indicators;
			$resultado['releases']=$releases;
			// $resultado['releases']=$indicators;

			// return $resultado;
			return response()->json($resultado);
		}
    }
}
