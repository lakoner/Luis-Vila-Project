<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use App\Obra;
use App\Actualidad;
>>>>>>> obras

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
<<<<<<< HEAD
        return view('home');
=======
        $obras = Obra::all();
        $actualidades = Actualidad::all();

        // $obras->last();
        // $actualidades->last();

        return view('home',compact('obras','actualidades'));
>>>>>>> obras
    }
}
