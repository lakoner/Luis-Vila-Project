@extends('layouts.app')

@section('content')
<main class="content-framwork-1">

<table class="table">
            <tr>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Ténica</th>
                <th>Año</th>
                <th>Categoria</th>

            </tr>

            @foreach($obras as $obra)
            <tr>

                <td> <img class="obras-img" src="Obrasimg/{{$obra->image}}" alt=""> </td>
                <td>{{$obra->name}}</td>
                <td>{{$obra->style}}</td>
                <td>{{$obra->year}}</td>
<!--
                <td>
                    <form action="{{Route('obra.destroy', $obra->id)}}" method="post">
                    @method('delete')
                    @csrf
                        <button class="btn btn-danger">
                        <i class="far fa-trash-alt"></i>
                    </form>
                </td> -->

                <!-- <td>
                    <a href="{{Route('obra.edit', $obra->id)}}" class="btn btn-secondary" >
                    <i class="fas fa-plus"></i>
                    </a>
                </td> -->

            </tr>

            @endforeach
        </table>

@endsection
