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
            $file = $request->file('image');
            $name = time().$file->getClientOriginalName();
            $actualidad['image'] = $request->file('image')->storeAs('noticies',$name,'public');
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
            $file = $noticia->image;
            // dd($file);
            Storage::delete('public/'.$file);
            $file = $request->file('image');
            $name = time().$file->getClientOriginalName();
            $actualidad['image'] = $request->file('image')->storeAs('noticies',$name,'public');
            Actualidad::where('id','=',$id)->update($actualidad);
            $actualidad = Actualidad::findOrFail($id);

        }

        return view('actualidad.edit',compact('actualidad'));
    }


    public function destroy($id)
    {
        Actualidad::destroy($id);
        return redirect(route('actualidad.index'));

    }
}

