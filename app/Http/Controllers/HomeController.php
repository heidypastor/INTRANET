<?php

namespace App\Http\Controllers;
use App\Comites;
use App\Indicators;
use App\Documents;
use App\Releases;
use App\Requisitos;
use App\Process;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        /*$document = Documents::orderBy('updated_at', 'DESC')->get()->first();*/
        $indicator = Indicators::orderBy('updated_at', 'DESC')->get()->first();
        /*$release = Releases::orderBy('updated_at', 'DESC')->get()->first();*/
        $release = Releases::orderBy('updated_at', 'DESC')->where('RelGeneral', 0)->first();
        $document = Documents::orderBy('updated_at', 'DESC')->get()->first();
        $comitesCarousel = Comites::orderBy('updated_at', 'DESC')->get()->first();
        $comites = Comites::all('id', 'ComiName');
        $requisito = Requisitos::orderBy('created_at', 'DESC')->get()->first();
        $proceso = Process::orderBy('updated_at', 'DESC')->get()->first();
        /*return $requisito;*/
        return view('dashboard', compact('comites', 'indicator', 'comitesCarousel', 'document', 'release', 'requisito', 'proceso'));
    }
}