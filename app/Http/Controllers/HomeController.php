<?php

namespace App\Http\Controllers;
use App\Comites;

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
        $comites = Comites::all('id', 'ComiName');
        return view('dashboard', compact('comites'));
    }
}
