<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function inici()
    {
        return view('inici');
    }

    public function obra()
    {
        return view('obra');
    }

    public function eat_art()
    {
        return view('eat_art');
    }

    public function biografia()
    {
        return view('biografia');
    }

    public function actualitat()
    {
        return view('actualitat');
    }

    public function prensa()
    {
        return view('prensa');
    }

    public function contactar()
    {
        return view('contactar');
    }


}
