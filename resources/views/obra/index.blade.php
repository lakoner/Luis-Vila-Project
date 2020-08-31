@extends('layouts.app')

@section('content')

<div class="content-admin">


<div class="actualidad-content">
            <div class="content-header">

 <form action="{{Route('obra.filter')}}">
               <h1><i class="fas fa-palette"></i>&nbsp;<b>Obras</b>

               <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">

                        <a href="{{url('/obra')}}" target="_blank">
                            <label class="btn btn-secondary header-left-button">
                                <b>Vista previa</b>
                            </label>
                        </a>

                        <a href="{{url('/obra/create')}}">
                        <label class="btn btn-secondary btn-header-between-buttons">
                            <b>Nueva Obra</b>
                        </label>
                     </a>

                     <label class="btn btn-secondary btn-header-between-buttons">

                                <select class=" form-control" name="categoria_id">
                                <option class="selected" hidden>Filtra por Categoria</option>

                                @foreach($categorias as $categoria)
                                <option value="{{$categoria->id}}">{{$categoria->name}}</option>
                                @endforeach
                            </select>
                        </label>

                        <button class="btn btn-secondary btn-header-between-buttons filter-btn">
                           Filtrar
                        </button>

                         <a href="{{url('/obra')}}">
                         <label class="btn btn-secondary header-right-button">
                               <b>Todas</b>
                        </label>

                        </a></h1>


             </div></form>

            <br><br><br>


<div class="content-table">
     <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Imagen</th>
                        <th>Nombre</th>
                        <th>Técnica</th>
                        <th class="th-small">Año</th>
                        <th>Categoria</th>
                        <th>Serie</th>
                        <th>Creación</th>
                        <th>Modificación</th>
                        <th class="th-small">Edita</th>
                        <th class="th-small">Elimina</th>
                    </tr>
                </thead>

            @foreach($obras as $obra)

                <tr>
                    <td class="img">
                        <a href="#">
                            <i class="far fa-eye fa-2x" data-toggle="modal" data-target="#image{{ $obra->id }}" data-whatever="@mdo"></i>
                        </a>
                            <img class="img-obras-index" src="{{asset('storage').'/'.$obra->image}}" alt="" name="image">
                    </td>
                    <td>{{$obra->name}}</div></td>
                    <td>{{$obra->technique}}</td>
                    <td>{{$obra->year}}</td>
                    <td>{{$obra->categoria->name}}</td>
                    <td>{{$obra->serie->name}}</td>

                    <td class="timestamp"><div >{{$obra->created_at}}</div></td>
                    <td>{{$obra->updated_at}}</td>
                    <td class="cta"><a href="{{Route('obra.edit', $obra->id)}}">
                        <button class="button-edit btn btn-secondary"><i class="far fa-edit"></i></button> </a>
                    </td>
                    <td class="cta">
                        <form action="{{Route('obra.destroy', $obra->id)}}" method="post"> @method('delete')@csrf
                            <button class="btn btn-secondary button-delete" onclick="return confirm ('¿Esta segur que desitja eliminar {{$obra->name}} de manera permanent?')">
                            <i class="far fa-trash-alt"></i>
                        </form>
                    </td>
                </tr>

                <div class="modal fade" id="image{{ $obra->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content modal-lg">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img class="img-news-index" src="{{asset('storage').'/'.$obra->image}}" alt="" name="image">

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
</div>



@endsection

