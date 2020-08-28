@extends('layouts.app')


@section('content')

    <div class="content-admin">
        <div class="actualidad-content">
            <div class="content-header">
                <h1><b>Puja una Notícia</b>
                    <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                        <label class="btn btn-secondary">
                            <a href="{{route('actualidad.index')}}">
                                 <input type="radio" name="options" id="option1" ><i class="fas fa-long-arrow-alt-left"></i>
                            </a>
                        </label>
                        <label class="btn btn-secondary">
                            <a href="{{url('/obra/create')}}">
                                <input type="radio" name="options" id="option2"> Nova Obra
                            </a>
                        </label>
                    </div>
                </h1>
            </div>
<br>
        <div class="actualidad-create">
            <form class="form-group" method="POST" action="{{Route('actualidad.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                        <br><div class="form-group">
                            <label for="">Títol </label>
                            <input class="form-control" type="text" name="title">
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card">
                        <br><div class="form-group">
                            <label for="">Subtítol </label>
                            <input class="form-control" type="text" name="subtitle">
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="form-group">
                            <br><label for="">Data</label>
                            <input class="form-control" type="date" name="date">
                        </div>
                    </div>
                </div>



                <div class="col-md-5"><br><br>
                    <div class="card">
                        <div class="form-group">
                        <br><label for="">Imatge</label><br><br>
                            <label for="input-file">Tria una imatge</label><br>
                                <input class="border-none" id="input-file" type="file" name="image"><br>
                            </div><br>

                        </div>

                </div>



                <div class="col-md-7">
                    <br><br><div class="card">
                        <div class="form-group">
                        <br><label for="exampleFormControlTextarea1">Text</label>
                            <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="4"></textarea>
                        </div>
                    </div>
                </div>
                    <div class="col-md-12">
                        <br><div class="card-footer">
                            <button class="btn btn-primary">Puja una Notícia</button>
                        </div>
                    </div>


                    </form>
                </div>

            </div>
        </div>


    </div>



@endsection
