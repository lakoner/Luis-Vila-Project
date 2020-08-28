@extends('layouts.app')

@section('content')
<div class="content-admin">
        <div class="actualidad-content">
            <div class="content-header">
                <h1><b>Puja una Obra</b>
                    <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                        <label class="btn btn-secondary">
                            <a href="{{route('obra.index')}}">
                                 <input type="radio" name="options" id="option1" ><i class="fas fa-long-arrow-alt-left"></i>
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
<br>
        <div class="actualidad-create">
            <form class="form-group" method="POST" action="{{Route('obra.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                        <br><div class="form-group">
                            <label for="">Nom </label>
                            <input class="form-control" type="text" name="name">
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="card">
                        <br><div class="form-group">
                            <label for="">Categoría</label>
                                <select class="form-control" name="categoria_id">
                                    <option hidden selected> </option>
                                    <option value="1">Pintura</option>
                                    <option value="2">Escultura</option>
                                    <option value="3">Disseny</option>
                                </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                    <br><div class="form-group">
                        <label for="">Tècnica</label>
                                <select class="form-control" name="technique" required>
                                    <option hidden selected> </option>
                                    <optgroup label="Escultura">
                                        <option value="Mixta, làtex i serigrafia de 50x50 cm">Mixta, làtex i serigrafia de 50x50 cm</option>
                                        <option value="Escultures de bronze">Escultures de bronze</option>
                                        <option value="Mixta sobre paper i serigrafia">Mixta sobre paper i serigrafia</option>
                                        <option value="Escultures d'acer oxidat  bujit amb serigrafia">Escultures d'acer oxidat  bujit amb serigrafia</option>
                                        <option value="Escultures d'acer oxidat/Fusta amb serigrafia">Escultures d'acer oxidat/Fusta amb serigrafia</option>
                                        <option value="Escultures de poliester i elements variats">Escultures de poliester i elements variats</option>
                                        <option value="Teles técnica mixta i planxes montades sobre suport d'acer">Teles técnica mixta i planxes montades sobre suport d'acer</option>
                                        <option value="Esculturas d'acer">Esculturas d'acer</option>
                                    </optgroup>
                                    <optgroup label="Pintura">
                                        <option value="Acrílic sobre tela">Acrílic sobre tela</option>
                                        <option value="Mixta sobre tela i collage">Mixta sobre tela i collage</option>
                                        <option value="Mixta sobre paper i serigrafia">Mixta sobre paper i serigrafia</option>
                                        <option value="Mixta sobre paper">Mixta sobre paper</option>
                                        <option value="Mixta sobre tela i serigrafia">Mixta sobre tela i serigrafia</option>
                                        <option value="Paper fet a mà amb tècnica mixta i serigrafia">Paper fet a mà amb tècnica mixta i serigrafia</option>
                                        <option value="Tècnica mixta sobre paper i acrílic sobre tela">Tècnica mixta sobre paper i acrílic sobre tela</option>
                                    </optgroup>

                                </select>
                        </div>
                    </div>
                </div>
<br>
                <div class="col-md-4">
                    <br><br><div class="card">
                    <br><div class="form-group">
                        <label for="">Series</label>
                                <select class="form-control" name="serie_id" required>
                                    <option hidden selected> </option>
                                    <optgroup label="Escultura">
                                        <option value="Congreso del mundo 2010">Congreso del mundo 2010</option>
                                        <option value="Exvot 2009">Exvot 2009</option>
                                        <option value="Nautes 2006-09">Nautes 2006-09</option>
                                        <option value="Atmans 2002-03">Atmans 2002-03</option>
                                        <option value="Logos 1998-03">Logos 1998-03</option>
                                        <option value="Derivacions 1994">Derivacions 1994</option>
                                        <option value="Navegants 1997">Navegants 1997</option>
                                        <option value="Monestir 1995">Monestir 1995</option>
                                        <option value="- Sense seriar -"> - Sense seriar -</ option>
                                    </optgroup>
                                    <optgroup label="Pintura">
                                        <option value="Absolut 2009-10">absolut 2009-10</option>
                                        <option value="Tokyo 2008">Tokyo 2008</option>
                                        <option value="Nautes 2006-09">Nautes 2006-09</option>
                                        <option value="Barques 2006">Barques 2006</option>
                                        <option value="Regions intermitges 2004">Regions intermitges 2004</option>
                                        <option value="Logos 1998-03">Logos 1998-03</option>
                                        <option value="Navegants 1997">Navegants 1997</option>
                                        <option value="Contraris 1993-96">Contraris 1993-96</option>
                                        <option value="Georgia 1992">Georgia 1992</option>
                                    </optgroup>

                                </select>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <br><br><div class="card">
                        <div class="form-group">
                        <br><label for="">Any obra</label>
                        <input class="form-control" type="text" name="year">
                        </div>
                    </div>
                </div>

                <div class="col-md-5"><br><br>
                    <div class="card">
                        <div class="form-group">
                        <br><label for="">Imatge</label>
                                <input class="form-group border-none" id="input-file" type="file" name="image"><br>
                            </div>
                        </div>
                </div>

                   <div class="col-md-12">
                   <br>  <div class="card-footer">
                            <button class="btn btn-primary">Puja una Obra</button>
                        </div>
                    </div>


                    </form>
                </div>

            </div>
        </div>


    </div>



