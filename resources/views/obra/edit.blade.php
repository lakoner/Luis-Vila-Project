@extends('layouts.app')

@section('content')

<div class="content-admin">
        <div class="actualidad-content">
            <div class="content-header">
                <h1><b>Puja una Obra</b>
                    <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                          <a href="{{route('obra.index')}}">
                              <label class="btn btn-secondary header-left-button">

                                <i class="fas fa-long-arrow-alt-left"> </i>
                                &nbsp;Torna

                        </label></a>
                         <a href="{{url('/obra/create')}}">
                            <label class="btn btn-secondary edit-new-button">

                                Nova Obra

                        </label></a>
                    </div>
                </h1>
            </div>
<br>
    <div class="create">
        <form class="form-group" method="POST" action="{{Route('obra.update',$obra->id)}}" enctype="multipart/form-data">
            @csrf
            @method('patch')
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                        <br><div class="form-group form-cards">
                            <label for="">Nombre </label>
                            <input class="form-control" type="text" name="name" value="{{$obra->name}}">
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card">
                        <br><div class="form-group form-cards">
                            <label for="">Categoria</label>
                                <select class="form-control" name="categoria_id">
                                <option class="selected" value="{{$obra->categoria_id}}">{{$obra->categoria->name}}</option>
                                    <option value="1">Pintura</option>
                                    <option value="2">Escultura</option>
                                    <option value="3">Disseny</option>
                                </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                    <br><div class="form-group form-cards">
                        <label for="">Técnica</label>
                                <select class="form-control" name="technique" required>
                                    <option class="selected"hidden>{{$obra->technique}} </option>
                                    <optgroup label="Escultura">
                                        <option value="Mixta, látex y serigrafia de 50x50 cm">Mixta, látex y serigrafia de 50x50 cm</option>
                                        <option value="Esculturas de bronce.">Esculturas de bronce.</option>
                                        <option value="Mixta sobre papel y serigrafía">Mixta sobre papel y serigrafía</option>
                                        <option value="Esculturas de acero oxidado con serigrafía">Esculturas de acero oxidado con serigrafía</option>
                                        <option value="Escutluras de acero oxidado/Madera con serigrafía">Escutluras de acero oxidado/Madera con serigrafía</option>
                                        <option value="Esculturas de poliester y elementos variados">Esculturas de poliester y elementos variados</option>
                                        <option value="Telas técnica mixta y planchas de acero montadas sobre soporte de metal">Telas técnica mixta y planchas de acero montadas sobre soporte de metal</option>
                                        <option value="Esculturas de acero">Esculturas de acero</option>
                                    </optgroup>
                                    <optgroup label="Pintura">
                                        <option value="Acrílico sobre tela">Acrílico sobre tela</option>
                                        <option value="Mixta sobre tela y collage">Mixta sobre tela y collage</option>
                                        <option value="Mixta sobre papel y serigrafía">Mixta sobre papel y serigrafía</option>
                                        <option value="Mixta sobre papel">Mixta sobre papel</option>
                                        <option value="Mixta sobre tela i serigrafia">Mixta sobre tela i serigrafia</option>
                                        <option value="Paper fet a mà amb tècnica mixta i serigrafia">Paper fet a mà amb tècnica mixta i serigrafia</option>
                                        <option value=" Técnica mixta sobre papel y acrílico sobre tela">Tècnica mixta sobre paper i acrílic sobre tela</option>
                                        <option value="- tecnica no especificada">- tecnica no especificada -</option>
                                    </optgroup>
                                </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                <br><br><div class="card">
                    <div class="form-group form-cards">
                   <br><label for="">Series</label>
                                <select class="form-control" name="serie_id">
                                    <option class="selected" value="{{$obra->serie_id}}"> {{$obra->serie->name}}</option>
                                    <optgroup label="Escultura">
                                        <option value="1">Derivacions 1994</option>
                                        <option value="2">Monestir 1995</option>
                                        <option value="3">Navegants 1997</option>
                                        <option value="4">Logos 1998-03</option>
                                        <option value="5">Atmans 2002-03</option>
                                        <option value="6">Nautes 2006-09</option>
                                        <option value="7">Exvot 2009</option>
                                        <option value="8">Congreso del mundo 2010</option>
                                        <option value="9"> Pa</ option>
                                    </optgroup>
                                    <optgroup label="Pintura">
                                        <option value="10">Georgia 1992</option>
                                        <option value="11">Contraris 1993-96</option>
                                        <option value="12">Navegants 1997</option>
                                        <option value="13">Logos 1998-03</option>
                                        <option value="14">Regions intermitges 2004</option>
                                        <option value="15">Barques 2006</option>
                                        <option value="16">Nautes 2006-09</option>
                                        <option value="17">Tokyo 2008</option>
                                        <option value="18">absolut 2009-10</option>
                                        <option value="19"> - sin serie - </option>
                                    </optgroup>
                                </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <br><br><div class="card">
                        <div class="form-group form-cards">
                        <br><label for="">Año</label>
                        <input class="form-control" type="text" name="year" value="{{$obra->year}}">
                        </div>
                    </div>
                </div>

                <div class="col-md-5"><br><br>
                    <div class="card ">
                        <div class="form-group form-cards">
                        <br><label for="">Imagen</label>
                               <img class="img-obra-edit" src="{{asset('storage').'/'.$obra->image}}" alt="">


                        </div>
                    </div>
                </div>

                <div class="col-md-7"></div>

                    <div class="col-md-5"><br>
                        <div class="card ">
                            <div class="form-group form-file-edit"><br>
                                <label for=""></label>
                                <input class="form-group file" id="input-file" type="file" name="image">
                            </div>
                        </div>
                    </div>





                <div class="col-md-12"><br><br>
                    <div class="card-footer footer-buttons">
                        <input type="submit" class="btn btn-secondary input-button" value="Guardar"/>
    </form>


                        <div>
                            <a href="{{url('/obra')}}">
                            <button class="btn btn-secondary">Aceptar</button></a>
                        </div>
                    </div>
                    <br><br>
                </div>



        </div>
    </div>



@endsection
