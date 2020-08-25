@extends('layouts.app')


@section('content')
<main class="content-framework-2">
<div class="content-menu card">
            <div class="admin-menu">
                <nav>
                    <li><a href="{{url('/obra')}}">Obra</a></li>

                    <li><a href="{{url('/obra/create')}}">Pujar obra</a></li>

                    <li><a href="{{url('/actualidad')}}">Noticies</a></li>

                    <li> <a href="{{url('/actualidad/create')}}">Pujar Noticies</a></li>

                    <li><a href="{{url('/register')}}">Crear nou usuari</a></li>


                </nav>
            </div>
</div>
<div class="content-admin">
    <br><br>


    <div class="row">

        <div class="col-md-3"></div>
        <div class="card col-md-6"><br>
        <form class="form-group" method="POST" action="{{Route('actualidad.update',$actualidad->id)}}" enctype="multipart/form-data">
        @csrf
        @method('patch')

                     <div class="form-group">
                    <label for="">Títol Notícia</label>
                    <input class="form-control" type="text" name="title" value="{{$actualidad->title}}">
                </div>

                <div class="form-group">
                    <label for="">Subtítol Noticia</label>
                    <input class="form-control" type="text" name="subtitle" value="{{$actualidad->subtitle}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Text Notícia</label>
                    @isset($actualidad)
                    <textarea class="form-control" name="text" required>{{$actualidad->text}}</textarea>
                    @else
                    <textarea class="form-control" name="text" required>{{$actualidad->text}}</textarea>
                    @endIf
                </div>
                <div class="form-group">
                    <label for="">Imatge Noticia</label><br>
                    <div>
                    <img class="img-news-edit" src="{{asset('storage').'/'.$actualidad->image}}" alt="">
                    </div>

                    <input type="file" name="image" >
                </div>


                <input type="submit" class="btn btn-primary btn-xs" value="Guarda camvis">


            </form>
            <a href="{{Route('actualidad.index')}}">
               <input type="submit" class="btn btn-primary btn-xs" value="Accepta"></a><br>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

</main>

@endsection
