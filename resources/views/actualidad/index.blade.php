@extends('layouts.app')


@section('content')
<main class="content-admin">


 <br><br>

<table class="table">
            <tr>
                <th>Títol</th>
                <th>Subtitol</th>
                <th>Text Noticia</th>
                <th>Data de Creació</th>
                <th>Última Modificació</th>
                <th>Imatge</th>

            </tr>

            @foreach($actualidades as $actualidad)
            <tr>
                <td>{{$actualidad->title}}</td>
                <td>{{$actualidad->subtitle}}</td>
                <td>{{$actualidad->text}}</td>
                <td>{{$actualidad->created_at}}</td>
                <td>{{$actualidad->updated_at}}</td>

                <td>
                <img class="img-news" src="{{asset('storage').'/'.$actualidad->image}}" alt="">
               </td>

                 <!-- <td> <img class="obras-img" src="actualidadimg/{{$actualidad->image}}" alt=""> </td>   -->

               <td>
                    <form action="{{Route('actualidad.destroy', $actualidad->id)}}" method="post">
                    @method('delete')
                    @csrf
                        <button class="btn btn-danger" onclick="return confirm ('¿Estas segura de borrar esta noticia?')">
                        <i class="far fa-trash-alt"></i>
                    </form>
                </td>

                <td>
                    <a href="{{Route('actualidad.edit', $actualidad->id)}}"><button class="btn btn-secondary">
                    <i class="far fa-edit"></i> </a>

                </td>

            </tr>

            @endforeach
        </table>


@endsection
