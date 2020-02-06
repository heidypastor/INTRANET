<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
