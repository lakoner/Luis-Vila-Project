
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
            <h1>Noticias</h1>
                <a href="{{url('/actualidad/create')}}"><button class="btn btn-success float-right">Crear Noticia</button><br><br><br></a>
            <table class="table">
                <tr>
                    <th>Imagen</th>
                    <th class="thTitulo">Titulo</th>
                    <th>Subtitulo</th>
                    <th>Texto</th>
                    <th>Fecha </th>
                    <th>Creación</th>
                    <th>Modificación</th>
                    <th class="cta">Editar</th>
                    <th class="cta">Eliminar</th>
                </tr>

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
                    <td class="cta"><a href="{{Route('actualidad.edit', $actualidad->id)}}"><button class="button-edit">
                        <i class="far fa-edit"></i> </a>
                    </td>
                    <td class="cta">
                        <form action="{{Route('actualidad.destroy', $actualidad->id)}}" method="post"> @method('delete')@csrf
                            <button class="button-delete" onclick="return confirm ('¿Estas segura de borrar esta noticia?')">
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
</main>
@endsection
