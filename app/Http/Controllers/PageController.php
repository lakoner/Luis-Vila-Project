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

    public function biografia()
    {
        return view('biografia');
    }

    public function actualitat()
    {
        return view('actualitat');
    }

    public function bibliografia()
    {
        return view('bibliografia');
    }

    public function contactar()
    {
        return view('contactar');
    }


}
