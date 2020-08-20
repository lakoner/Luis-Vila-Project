<?php

namespace App\Http\Controllers;

use App\Obra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ObraController extends Controller
{

    public function index()
    {
        $datos['obras'] = Obra::paginate(5);
        return view('obra.index',$datos);


    }


    public function create()
    {
        return view('obra.create');
    }


    public function store(Request $request)
    {
        $obra = request()->except('_token');

        if($request->hasFile('image')){


            $obra['image'] = $request->file('image')->store('obres','public');

        }

        Obra::insert($obra);

        return redirect(route('obra.index'));
    }


    public function show(Obra $obra)
    {

    }


    public function edit($id)
    {
        $obra = Obra::FindOrFail($id);

        return view('obra.edit',compact('obra'));
    }


    public function update(Request $request, $id)
    {
        // dd($id);
        $obra=request()->except(['_token','_method']);

        if($request->hasFile('image')){

            $obres = Obra::findOrFail($id);

            Storage::delete('public/'.$obres->image);

            $obra['image'] = $request->file('image')->store('obres','public');

        }

        // $actualidad->update($request->all());
        Obra::where('id','=',$id)->update($obra);

        $obra = Obra::findOrFail($id);
        return view('obra.edit',compact('obra'));
        //  return redirect(route('actualidad.index'));
    }

    public function destroy($id)
    {
        Obra::destroy($id);
        return redirect(route('obra.index'));
    }
}
