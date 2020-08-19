@extends('layouts.app')


@section('content')
<main class="content-admin">


 <br><br>

<table class="table">
            <tr>
                <th>Titulo</th>
                <th>Subtitulo</th>
                <th>Texto</th>
                <th>Imagen</th>


            </tr>

            @foreach($noticias as $noticia)
            <tr>


                <td>{{$noticia->title}}</td>
                <td>{{$noticia->subtitle}}</td>
                <td>{{$noticia->text}}</td>
                <td> <img class="obras-img" src="Noticiasimg/{{$noticia->image}}" alt=""> </td>
<!--
                <td>
                    <form action="{{Route('noticia.destroy', $noticia->id)}}" method="post">
                    @method('delete')
                    @csrf
                        <button class="btn btn-danger">
                        <i class="far fa-trash-alt"></i>
                    </form>
                </td> -->

                <!-- <td>
                    <a href="{{Route('noticia.edit', $noticia->id)}}" class="btn btn-secondary" >
                    <i class="fas fa-plus"></i>
                    </a>
                </td> -->

            </tr>

            @endforeach
        </table>


@endsection
