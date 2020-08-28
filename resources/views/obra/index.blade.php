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
            <h1>Obras</h1>

    <div class="categorias-obra-index">
    <form action="{{Route('obra.filter')}}">
        <label for="">Filtrar Categorias</label>
            <select class="form-control" name="categoria_id">
                <option hidden selected> </option>

                @foreach($categorias as $categoria)
                <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                @endforeach
            </select>
            <br>
            <input class="btn btn-primary" type="submit" value="Filtra Categories">

            </div>

     </form>
     <a href="{{url('/obra')}}"><button class="btn btn-danger">Totes</button></a>
    <a href="{{url('/obra/create')}}"><button class="btn btn-success float-right">Afegeix Obra</button></a><br><br><br>

 <br><br>

<table class="table">
            <tr>

                <th>Imatge</th>
                <th>Nom</th>
                <th class="th-small">Tecnica</th>
                <th class="th-small">Any</th>
                <th>Categoría</th>
                <th>Creació</th>
                <th>Modificació</th>
                <th class="th-small">Edita</th>
                <th class="th-small">Elimina</th>
            </tr>

            @foreach($obras as $obra)
            <tr>
                <td class="img">
                        <a href="#">
                            <i class="far fa-eye fa-2x" data-toggle="modal" data-target="#image{{ $obra->id }}" data-whatever="@mdo"></i>
                        </a>
                    <img class="img-obras-index" src="{{asset('storage').'/'.$obra->image}}" alt="">
                </td>
                <td><div class="ellipsis"><a href="#">{{$obra->name}}</a></div></td>
                <td><div class="ellipsis"><a href="#">{{$obra->technique}}</a></div></td>
                <td>{{$obra->year}}</td>
                <td>{{$obra->categoria->name}}</td>

                <td class="timestamp" >{{$obra->created_at}}</td>
                <td class="timestamp">{{$obra->updated_at}}</td>
                <td class="cta"><a href="{{Route('obra.edit', $obra->id)}}"><button class="btn btn-primary button-td">
                        <i class="far fa-edit"></i> </a>
                </td>
                    <td class="cta">
                    <form action="{{Route('obra.destroy', $obra->id)}}" method="post"> @method('delete')@csrf
                        <button class=" btn btn-danger button-td" onclick="return confirm ('¿Estas segura de borrar esta noticia?')">
                        <i class="far fa-trash-alt"></i>
                    </form>
                </td>





            </tr>

            @endforeach
        </table>

@endsection
