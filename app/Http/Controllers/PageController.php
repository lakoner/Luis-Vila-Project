<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actualidad;
use App\Obra;
use App\Serie;
use App\Categoria;
use App\User;

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

        $series = Serie::whereIn('id',[10,11,12,13,14,15,16,17,18])->get();

        return view('pintura',compact('obras','series'));
    }

    public function filterSeriePintura(Request $request)
    {
        $obras = Obra::filterBySerie($request->serie_id);

        $series = Serie::whereIn('id',[10,11,12,13,14,15,16,17,18])->get();
        return view('/pintura',compact('series','obras'));
    }


    public function escultura()
    {
        $categoria_escultura = Categoria::id('Escultura');

        $obras = Obra::filterByCategory($categoria_escultura);
        $series = Serie::whereIn('id',[1,2,3,4,5,6,7,8,9])->get();

        return view('escultura',compact('obras','series'));
    }

    public function filterSerieEscultura(Request $request)
    {
        $obras = Obra::filterBySerie($request->serie_id);

        $series = Serie::whereIn('id',[1,2,3,4,5,6,7,8,9])->get();
        return view('/escultura',compact('series','obras'));
    }

    public function diseño()
    {
        $categoria_escultura = Categoria::id('Disseny');
        $obras = Obra::filterByCategory($categoria_escultura);

        return view('diseño',compact('obras'));
    }
    public function volcan()
    {
        return view('volcan');
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
