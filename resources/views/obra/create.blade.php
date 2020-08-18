@extends('layouts.app')

@section('content')
<div class="container">
    <br><br><br><br>
    <div class="row">

        <div class="col-md-4"></div>
        <div class="card col-md-4"><br>
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

                <button class="btn btn-primary">Afegir</button>

            </form>
        </div>
        <div class="col-md-4"></div>
    </div>

</div>



@endsection
