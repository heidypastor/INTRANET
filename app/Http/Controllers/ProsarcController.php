<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProsarcController extends Controller
{
    public function infoProsarc()
    {
        return view('prosarc.infoProsarc');
    }
}
