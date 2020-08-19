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
                    <label for="">Titol</label>
                    <input class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="">Imatge</label>
                    <input type="file" name="image">
                </div>
                <div class="form-group">
                    <label for="">Subtitol</label>
                    <input class="form-control" type="text" name="subtitle">
                </div>
                <div class="form-group">
                    <label for="">Text</label>
                    <input class="form-control" type="text" name="text">
                </div>
                <

                <button class="btn btn-primary">Afegir Noticia</button>

            </form>
        </div>
        <div class="col-md-3"></div>
    </div>

</main>

@endsection
