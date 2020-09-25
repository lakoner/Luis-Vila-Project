<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Categoria;
use App\Obra;
use App\Serie;
use Illuminate\Support\Facades\Storage;



class ObraController extends Controller
{

    public function index()
    {
        $obras = Obra::all();
        $categorias = Categoria::all();

        return view('obra.index',compact('categorias','obras'));

    }

    public function last()
    {
        $obras = Obra::all();
        return view('/home')->with('obra', $obras->last());
    }



    public function filter(Request $request)
    {
        $obras = Obra::filterByCategory($request->categoria_id);

        $categorias = Categoria::all();
        return view('obra.index',compact('categorias','obras'));

    }

    public function create()
    {

        return view('obra.create');
    }


    public function store(Request $request)
    {
        $obra = request()->except('_token');

        if($request->hasFile('image')){
            $file = $request->file('image');
            $name = time().$file->getClientOriginalName();
            $obra['image'] = $request->file('image')->storeAs('obres',$name,'public');
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
            $file = $obres->image;
            // dd($file);
            Storage::delete('public/'.$file);
            $file = $request->file('image');
            $name = time().$file->getClientOriginalName();

            $obra['image'] = $request->file('image')->storeAs('obres',$name,'public');
            Obra::where('id','=',$id)->update($obra);

        }

        // if($request->hasFile('image')){

        //     $obres = Obra::findOrFail($id);

        //     File::delete('/obras_img/'.$obres->image);

        //     $file = $request->file('image');
        //     $name = time().$file->getClientOriginalName();

        //     $file->move(public_path().'/obras_img/',$name);
        // }




        $obra = Obra::findOrFail($id);

        return view('obra.edit',compact('obra'));

    }

    public function destroy($id)
    {
        Obra::destroy($id);
        return redirect(route('obra.index'));
    }
}
