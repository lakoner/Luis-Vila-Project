@extends('layouts.app')


@section('content')

    <div class="content-admin">
        <div class="actualidad-content">
            <div class="content-header">
                <h1><i class="fas fa-upload"></i>&nbsp;<b>Nueva Notícia</b>
                <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                          <a href="{{route('actualidad.index')}}">
                              <label class="btn btn-secondary header-left-button">
                                <i class="fas fa-long-arrow-alt-left"> </i>
                                &nbsp;Atrás

                        </label></a>

                    </div>
                </h1>
            </div>
<br>
        <div class="create">
            <form class="form-group" method="POST" action="{{Route('actualidad.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                        <br><div class="form-group form-cards">
                            <label for="">Titulo </label>
                            <input class="form-control" type="text" name="title">
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card">
                        <br><div class="form-group form-cards">
                            <label for="">Subtitulo </label>
                            <input class="form-control" type="text" name="subtitle">
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="form-group form-cards">
                            <br><label for="">Fecha</label>
                            <input class="form-control" type="date" name="date">
                        </div>
                        <br>
                    </div>
                </div>



                <div class="col-md-5"><br><br>
                    <div class="card">
                        <div class="form-group form-cards">
                        <br><label for="">Imagen</label><br><br>
                            <label for="input-file">Elije una Imagen</label><br>
                                <input class="form-group file" id="input-file" type="file" name="image"><br>
                            </div><br>

                        </div>

                </div>



                <div class="col-md-7">
                    <br><br><div class="card">
                        <div class="form-group form-cards">
                        <label for="exampleFormControlTextarea1">Texto</label>
                            <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="4"></textarea>
                        </div><br>
                    </div>
                </div>
                    <div class="col-md-12">
                        <br><div class="card-footer">
                        <input type="submit" class="btn btn-secondary input-button" value="Nueva Noticia"/>
                        </div>
                    </div>


                    </form>
                </div>

            </div>
        </div>


    </div>



@endsection
