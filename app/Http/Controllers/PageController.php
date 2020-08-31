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
    public function pintura(Request $request)
    {
        $categoria_pintura = Categoria::id('Pintura');

        $obras = Obra::filterByCategory($categoria_pintura);

        $series = Serie::whereIn('id',[1,2,3,4,5,6,7,8,9])->get();

        return view('pintura',compact('obras','series'));
    }

    public function filterSerie(Request $request)
    {
        $obras = Obra::filterBySerie($request->serie_id);

        $series = Serie::whereIn('id',[1,2,3,4,5,6,7,8,9])->get();
        return view('/pintura',compact('series','obras'));
    }


    public function escultura()
    {
        $categoria_escultura = Categoria::id('Escultura');

        $obras = Obra::filterByCategory($categoria_escultura);
        $series = Serie::all();

        return view('escultura',compact('obras','series'));

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
