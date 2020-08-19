@extends('layouts.app')

@section('content')
<main class="content-admin">
    <br><br>

    <div class="row">

        <div class="col-md-3"></div>
        <div class="card col-md-6"><br>
        <form class="form-group" method="POST" action="{{Route('obra.store')}}" enctype="multipart/form-data">
                @csrf

                     <div class="form-group">
                    <label for="">Nom</label>
                    <input class="form-control" type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="">Imatge</label>
                    <input type="file" name="image">
                </div>
                <div class="form-group">
                    <label for="">Tecnica</label>
                    <input class="form-control" type="text" name="style">
                </div>
                <div class="form-group">
                    <label for="">Any</label>
                    <input class="form-control" type="text" name="year">
                </div>
                <div class="form-group">
                    <label for="">Categoria</label>
                    <select class="form-control" name="categoria_id">
                    <option hidden selected> </option>
                        <option value="1">Pintura</option>
                        <option value="2">Escultura</option>
                        <option value="3">Disseny</option>
                    </select>
                </div>

                <button class="btn btn-primary">Afegir</button>

            </form>
        </div>
        <div class="col-md-3"></div>
    </div>

</main>



@endsection
