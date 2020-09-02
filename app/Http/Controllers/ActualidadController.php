<?php

namespace App\Http\Controllers;

use App\Actualidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ActualidadController extends Controller
{

    public function index()
    {
        $actualidades = Actualidad::all();
        return view('actualidad.index',compact('actualidades'));

        // $actualidades = Actualidad::all();
        // return view('actualidad.index',['actualidades' => $actualidades]);
    }


    public function create()
    {
        return view('actualidad.create');
    }


    public function store(Request $request)
    {

        $actualidad = request()->except('_token');

        if($request->hasFile('image')){


            $actualidad['image'] = $request->file('image')->store('noticies','public');

        }

        Actualidad::insert($actualidad);

        return redirect(route('actualidad.index'));
    }


    public function show(actualidad $actualidad)

    {

        $actualidades = Actualidad::noticia($actualidad->id);
        $noticiaSlide = Actualidad::orderBy('date', 'desc')
        ->get();


        return view('noticia',compact('actualidades','noticiaSlide'));
    }


    public function edit($id)
    {
        $actualidad = Actualidad::FindOrFail($id);

        return view('actualidad.edit',compact('actualidad'));
    }


    public function update(Request $request, $id)
    {
        // dd($id);
        $actualidad=request()->except(['_token','_method']);

        if($request->hasFile('image')){

            $noticia = Actualidad::findOrFail($id);

            Storage::delete('public/'.$noticia->image);

            $actualidad['image'] = $request->file('image')->store('noticies','public');

        }

        // $actualidad->update($request->all());
        Actualidad::where('id','=',$id)->update($actualidad);

        $actualidad = Actualidad::findOrFail($id);
        return view('actualidad.edit',compact('actualidad'));
        //  return redirect(route('actualidad.index'));
    }


    public function destroy($id)
    {
        Actualidad::destroy($id);
        return redirect(route('actualidad.index'));

    }
}

