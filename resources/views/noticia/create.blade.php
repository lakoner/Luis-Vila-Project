@extends('layouts.app')


@section('content')
<main class="content-admin">
    <br><br>

    <div class="row">

        <div class="col-md-3"></div>
        <div class="card col-md-6"><br>
        <form class="form-group" method="POST" action="{{Route('noticia.store')}}" enctype="multipart/form-data">
                @csrf

                     <div class="form-group">
                    <label for="">Títol Notícia</label>
                    <input class="form-control" type="text" name="title">
                </div>

                <div class="form-group">
                    <label for="">Subtítol Noticia</label>
                    <input class="form-control" type="text" name="subtitle">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Text Notícia</label>
                    <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="">Imatge Noticia</label><br>
                    <input type="file" name="image">
                </div>


                <button class="btn btn-primary">Afegir Noticia</button>

            </form>
        </div>
        <div class="col-md-3"></div>
    </div>

</main>

@endsection
