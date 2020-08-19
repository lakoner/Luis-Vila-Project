@extends('layouts.app')

@section('content')
<main class="content-admin">
    <br><br>
    <div class="categorias-obra-index">

        <label for="">Categorias</label>
            <select class="form-control" name="categoria_id">
                <option hidden selected> </option>
                <option value="1">Pintura</option>
                <option value="2">Escultura</option>
                <option value="3">Disseny</option>
            </select>
    </div>
 <br><br>

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
                <td>{{$obra->categoria->name}}</td>
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
