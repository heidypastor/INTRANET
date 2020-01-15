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
}
