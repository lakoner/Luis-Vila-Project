@extends('layouts.app')

@section('content')
<main class="content-admin">
    <br><br>
    <div class="categorias-obra-index">
<form action="{{Route('obra.filter')}}">
        <label for="">Categorias</label>
            <select class="form-control" name="categoria_id">
                <option hidden selected> </option>

                @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                @endforeach
            </select>
            <input class="btn btn-primary" type="submit" value="filtrar">
     </form>
    </div>
 <br><br>

<table class="table">
            <tr>

                <th>Nom</th>
                <th>Tecnica</th>
                <th>Any</th>
                <th>Categoría</th>
                <th>Data de Creació</th>
                <th>Última modificació</th>
                <th>Imatge</th>
            </tr>

            @foreach($obras as $obra)
            <tr>


                <td>{{$obra->name}}</td>
                <td>{{$obra->style}}</td>
                <td>{{$obra->year}}</td>
                <td>{{$obra->categoria->name}}</td>
                <td>{{$obra->created_at}}</td>
                <td>{{$obra->updated_at}}</td>
                <td>
                <img class="img-obra" src="{{asset('storage').'/'.$obra->image}}" alt="">
                </td>
                <td>
                    <form action="{{Route('obra.destroy', $obra->id)}}" method="post">
                    @method('delete')
                    @csrf
                        <button class="btn btn-danger">
                        <i class="far fa-trash-alt"></i>
                    </form>
                </td>

                 <td>
                   <a href="{{Route('obra.edit', $obra->id)}}"><button class="btn btn-secondary">
                    <i class="far fa-edit"></i> </a>
                </td>

            </tr>

            @endforeach
        </table>

@endsection
