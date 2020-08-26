<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actualidad;
use App\Obra;

class PageController extends Controller
{


    public function obras()
    {
        return view('obras');
    }

    public function eat_art()
    {
        return view('eat_art');
    }
    public function pintura()
    {
        $obras = Obra::all();

        return view('pintura',compact('obras'));
    }
    public function escultura()
    {
        return view('escultura');
    }
    public function diseño()
    {
        return view('eat_art');
    }



    public function biografia()
    {
        return view('biografia');
    }

    public function actualitat()
    {

        $actualidades = Actualidad::all();


        return view('actualitat',compact('actualidades'));
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
