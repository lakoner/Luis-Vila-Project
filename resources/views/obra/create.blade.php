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
                    <label for="">Nom Obra</label>
                    <input class="form-control" type="text" name="name">
                </div>

                <div class="form-group">
                <label for="">Categoría Obra</label>
                    <select class="form-control" name="categoria_id">
                        <option hidden selected> </option>
                        <option value="1">Pintura</option>
                        <option value="2">Escultura</option>
                        <option value="3">Disseny</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="">Any obra</label>
                    <input class="form-control" type="text" name="year">
                </div>

                <div class="form-group">
                    <label for="">Imatge obra</label>
                    <input type="file" name="image">
                </div>

                <button class="btn btn-primary">Afegir</button>

            </form>
        </div>
        <div class="col-md-3"></div>
    </div>

</main>



@endsection
