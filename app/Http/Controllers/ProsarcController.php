<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Documents;
use App\Indicators;
use App\Releases;
use App\Process;
use App\Requisitos;
use App\Alerts;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProsarcController extends Controller
{
    public function nosotros()
    {
        return view('prosarc.nosotros');
    }

    public function requiLegal()
    {
        return view('prosarc.requiLegal');
    }

    public function GHumana()
    {
        return view('prosarc.GHumana');
    }

    public function GAmbiental()
    {
        return view('prosarc.GAmbiental');
    }

    public function GCalidad()
    {
        return view('prosarc.GCalidad');
    }

    public function SST()
    {
        return view('prosarc.SST');
    }

    public function search()
    {
        $user = Auth::user()->id;
        $documents = Documents::all();
        $indicators = Indicators::all();
        $comunicados = Releases::all();
        $procesos = Process::all();
        $requisitos = Requisitos::all();
        $alerts = Alerts::where('user_id', $user)->get();

        /*return $alerts;*/

        return view('prosarc.search', compact('documents', 'indicators', 'comunicados', 'procesos', 'requisitos', 'alerts'));
    }
}
