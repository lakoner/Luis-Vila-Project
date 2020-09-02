@extends('layouts.app')

@section('content')
<main class="content-framework-2">

<div class="content-admin">
<div class="actualidad-content">
            <div class="content-header">
                <h1><i class="far fa-edit icon-edit-header"></i>&nbsp;<b>Editar Noticia</b>
                    <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                          <a href="{{route('actualidad.index')}}">
                              <label class="btn btn-secondary header-left-button">

                                <i class="fas fa-long-arrow-alt-left"> </i>
                                &nbsp;Atrás

                        </label></a>
                         <a href="{{url('/actualidad/create')}}">
                            <label class="btn btn-secondary header-right-button">

                                Nueva Noticias

                        </label></a>
                    </div>
                </h1>
            </div>
<br>
    <div class="create">
        <form class="form-group" method="POST" action="{{Route('actualidad.update',$actualidad->id)}}" enctype="multipart/form-data">
            @csrf
            @method('patch')

                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                        <br><div class="form-group form-cards">
                            <label for="">Titulo </label>
                            <input class="form-control" type="text" name="title" value="{{$actualidad->title}}">
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card">
                        <br><div class="form-group form-cards">
                            <label for="">Subtitulo </label>
                            <input class="form-control" type="text" name="subtitle" value="{{$actualidad->subtitle}}">
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="form-group form-cards">
                            <br><label for="">Fecha</label>
                            <input class="form-control" type="date" name="date" value="{{$actualidad->date}}">
                        </div>
                        <br>
                    </div>
                </div>

                <div class="col-md-5"><br><br>
                    <div class="card ">
                        <div class="form-group form-cards">
                        <br><label for="">Imagen</label>
                               <img class="img-edit" src="{{asset('storage').'/'.$actualidad->image}}" alt="">
                        </div><br>
                    </div>
                </div>

                <div class="col-md-7">
                    <br><br><div class="card">
                        <div class="form-group form-cards">
                        <label for="exampleFormControlTextarea1">Texto</label>
                            <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="4">{{$actualidad->text}}</textarea>
                        </div><br>
                    </div>
                </div>

                <div class="col-md-5"><br>
                        <div class="card ">
                            <div class="form-group form-file-edit"><br>
                                <label for="input-file"></label>
                                <input class="form-group file" id="input-file" type="file" name="image">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12"><br><br>
                    <div class="card-footer footer-buttons">
                        <input type="submit" class="btn btn-secondary input-button" value="Guardar"/>
    </form>
                    <div>
                        <a href="{{url('/actualidad')}}">
                            <buttton class="btn btn-secondary">Acceptar</button></a>
                        </div>
                    </div>

                </div>




                    <br><br>
            </div>



        </div>
    </div>


@endsection
