@extends('layouts.app')

@section('content')

<div class="content-admin">


    <div class="actualidad-content">
            <div class="content-header">
                <h1><b>Obres</b>
                    <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                        <label class="btn btn-secondary">
                            <a href="{{url('/obra')}}" target="_blank">
                                <input type="radio" name="options" id="option1" > Vista previa
                            </a>
                        </label>
                        <label class="btn btn-secondary">
                            <a href="{{url('/obra/create')}}">
                                <input type="radio" name="options" id="option2"> Nova Obra
                            </a>
                        </label>
                    </div>
                </h1>
            </div>


            <br><br><br>

            <table class="table">
                <thead class="thead-dark">
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
                </thead>

            @foreach($obras as $obra)

                <tr>
                    <td class="img">
                        <a href="#">
                            <i class="far fa-eye fa-2x" data-toggle="modal" data-target="#image{{ $obra->id }}" data-whatever="@mdo"></i>
                        </a>
                            <img class="img-news-index" src="{{asset('storage').'/'.$obra->image}}" alt="" name="image">
                    </td>
                    <td>{{$obra->name}}</div></td>
                    <td><div><a href="">{{$obra->Technique}}</a></div></td>
                    <td>{{$obra->year}}</td>
                    <td>{{$obra->categoria->name}}</td>
                    <td class="timestamp"><div >{{$obra->created_at}}</div></td>
                    <td>{{$obra->updated_at}}</td>
                    <td class="cta"><a href="{{Route('obra.edit', $obra->id)}}">
                        <button class="button-edit btn btn-primary"><i class="far fa-edit"></i></button> </a>
                    </td>
                    <td class="cta">
                        <form action="{{Route('obra.destroy', $obra->id)}}" method="post"> @method('delete')@csrf
                            <button class="btn btn-danger button-delete" onclick="return confirm ('¿Esta segur que desitja eliminar {{$obra->name}} de manera permanent?')">
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



@endsection

