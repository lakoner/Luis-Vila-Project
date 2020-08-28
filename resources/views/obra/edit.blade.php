@extends('layouts.app')

@section('content')
<main class="content-admin">
    <br><br>

    <div class="row">

        <div class="col-md-3"></div>
        <div class="card col-md-6"><br>
        <form class="form-group" method="POST" action="{{Route('obra.update',$obra->id)}}" enctype="multipart/form-data">
                @csrf
                @method('patch')

                     <div class="form-group">
                    <label for="">Nom Obra</label>
                    <input class="form-control" type="text" name="name" value="{{$obra->name}}">
                </div>

                <div class="form-group">
                    <label for="">Any Obra</label>
                    <input class="form-control" type="text" name="year" value="{{$obra->year}}">
                </div>
                <div class="form-group">
                    <label for="">Categoría Obra</label>
                    <select class="form-control" name="categoria_id">
                    <option class="selected" value="{{$obra->categoria_id}}"> {{$obra->categoria->name}}</option>
                        <option value="1">Pintura</option>
                        <option value="2">Escultura</option>
                        <option value="3">Disseny</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Imatge Obra</label><br>
                    <div>
                    <img class="img-obra" src="{{asset('storage').'/'.$obra->image}}" alt="">
                    </div>

                    <input type="file" name="image" >
                </div>

                <button class="btn btn-primary">Guarda Canvis</button>

            </form>
            <a href="{{Route('obra.index')}}">
               <input type="submit" class="btn btn-primary btn-xs" value="Accepta"></a><br>
        </div>
        <div class="col-md-3"></div>
    </div>

</main>



@endsection
