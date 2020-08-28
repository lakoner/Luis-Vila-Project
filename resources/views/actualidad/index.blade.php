
@extends('layouts.app')

@section('content')

<main>

<div class="content-admin">


    <div class="actualidad-content">
            <div class="content-header">
                <h1><b>Noticies</b>
                    <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                        <label class="btn btn-secondary">
                            <a href="{{url('/actualitat')}}" target="_blank">
                                <input type="radio" name="options" id="option1" > Vista previa
                            </a>
                        </label>
                        <label class="btn btn-secondary">
                            <a href="{{url('/actualidad/create')}}">
                                <input type="radio" name="options" id="option2"> Nova Noticia
                            </a>
                        </label>
                    </div>
                </h1>
            </div>


            <br><br><br>

            <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th class="th-left">Imagen</th>
                    <th class="th-Titulo">Titulo</th>
                    <th>Subtitulo</th>
                    <th class="th-small">Texto</th>
                    <th>Fecha </th>
                    <th>Creación</th>
                    <th>Modificación</th>
                    <th class="th-small">Editar</th>
                    <th class="th-small">Eliminar</th>
                </tr>
            </thead>

            @foreach($actualidades as $actualidad)

                <tr>
                    <td class="img">
                        <a href="#">
                            <i class="far fa-eye fa-2x" data-toggle="modal" data-target="#image{{ $actualidad->id }}" data-whatever="@mdo"></i>
                        </a>
                            <img class="img-news-index" src="{{asset('storage').'/'.$actualidad->image}}" alt="" name="image">
                    </td>
                    <td><div class="ellipsis"><a href="#">{{$actualidad->title}}</a></div></td>
                    <td><div><a href="">{{$actualidad->subtitle}}</a></div></td>
                    <td class="text-news-back">
                        <div>
                            <a href="#">
                                <i class="far fa-eye fa-2x" data-toggle="modal" data-target="#text{{ $actualidad->id }}" data-whatever="@mdo"></i>
                            </a>
                        </div>
                    </td>
                    <td>{{$actualidad->date}}</td>
                    <td class="timestamp"><div >{{$actualidad->created_at}}</div></td>
                    <td>{{$actualidad->updated_at}}</td>
                    <td class="cta"><a href="{{Route('actualidad.edit', $actualidad->id)}}">
                        <button class="button-edit btn btn-primary"><i class="far fa-edit"></i></button> </a>
                    </td>
                    <td class="cta">
                        <form action="{{Route('actualidad.destroy', $actualidad->id)}}" method="post"> @method('delete')@csrf
                            <button class="btn btn-danger button-delete" onclick="return confirm ('¿Estas segura de borrar esta noticia?')">
                            <i class="far fa-trash-alt"></i>
                        </form>
                    </td>
                </tr>

                <div class="modal fade" id="image{{ $actualidad->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content modal-lg">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body-news">
                                <img class="img-news-index" src="{{asset('storage').'/'.$actualidad->image}}" alt="" name="image">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tanca</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="text{{ $actualidad->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body-news">
                            {{$actualidad->text}}

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tanca</button>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            </table>

    </div>
</div>
</div>



</main>


@endsection
