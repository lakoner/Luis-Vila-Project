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
    <h1>Noticias</h1><br><br>

<form class="form-group" method="POST" action="{{Route('actualidad.store')}}" enctype="multipart/form-data">
                @csrf
    <div class="row">

        <div class="col-md-4">
           <div class="card">
                 <br><div class="form-group">
                    <label for="">Titulo Noticia</label>
                    <input class="form-control" type="text" name="title">
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="card">
                <br><div class="form-group">
                    <label for="">Subtitulo Noticia</label>
                    <input class="form-control" type="text" name="subtitle">
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <div class="form-group">
                    <br><label for="">Fecha Noticia</label>
                    <input class="form-control" type="date" name="date">
                </div>
            </div>
        </div>



        <div class="col-md-4"><br><br>
            <div class="card">
                <div class="form-group">
                <br><label for="">Imagen Noticia</label><br><br>
                    <label for="input-file">Elige una imagen</label><br>
                        <input id="input-file"  type="file" name="image">
                    </div><br>

                </div>

        </div>



        <div class="col-md-8">
             <br><br><div class="card">
                <div class="form-group">
                <br><label for="exampleFormControlTextarea1">Texto Noticia</label>
                    <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="4"></textarea>
                </div>
            </div>
        </div>
            <div class="col-md-12">
                <div class="card-footer">
                    <button class="btn btn-primary">Añade Notícia</button>
                </div>
            </div>


            </form>
        </div>

    </div>
</div>

</main>

@endsection
