<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actualidad;
use App\Obra;
use App\Serie;
use App\Categoria;

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

        $categoria_pintura = Categoria::id('Pintura');

        $obras = Obra::filterByCategory($categoria_pintura);
        $series = Serie::all();

        return view('pintura',compact('obras','series'));
    }

    public function filter(Request $request)
    {
        $series = Serie::filterBySerie($request->categoria_id);


        return view('pintura',compact('series','obras'));

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
