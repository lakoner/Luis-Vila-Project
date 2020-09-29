
@extends('layouts.app')

@section('content')
<div class="content-admin">


    <div class="actualidad-content">

            <div class="content-header">
                <h1><i class="fas fa-user"></i>&nbsp;<b>Usuarios</b>
                    <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                        <a href="{{url('/home')}}" target="_blank">
                        <label class="btn btn-secondary header-left-button">
                        <i class="fas fa-long-arrow-alt-left"> </i>&nbsp;Volver
                        </label> </a>

                        </a>
                    </div>
                </h1>
            </div>

            <br><br><br>

            <div class="content-table">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Nombre</th>
                            <th>Correo Electronico</th>
                            <th>Creado</th>
                            <th>Actualizado</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>

                    @foreach($users as $user)

                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->updated_at}}</td>
                            <td><form action="{{Route('usuarios.destroy', $user->id)}}" method="post"> @method('delete')@csrf
                                    <button class="btn btn-secondary button-delete" onclick="return confirm ('¿Estas seguro que deseas eliminar el usuario {{$user->name}} de manera permanente?')">
                                    <i class="far fa-trash-alt"></i>
                                </form></td>
                        </tr>
                            @endforeach
                </table><br><br>
            </div>

            <div class="content-table">
                <h4>Crea un usuario nuevo</h4><br>
                        <form method="POST" action="{{ route('usuarios.store') }}">
                        @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <div class="form-group form-cards">
                                    <label for="name" class="col-form-label text-md-right">{{ __('Nombre') }}</label>
                                    <input name="name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card">
                                <div class="form-group form-cards ">
                                    <label for="email" class="col-form-label text-md-right">{{ __('Correo Electrónico') }}</label>
                                        <input name="email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card">
                                <div class="form-group form-cards ">
                                    <label for="password" class="col-form-label text-md-right">{{ __('Contraseña') }}</label>
                                    <input name="password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card">
                                <div class="form-group form-cards">
                                    <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirma tu contraseña') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                </div>
                            </div>
                        </div>

                        <br><br>

                        <div class="col-md-12"><br>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-secondary">
                                    {{ __('Nuevo usuario') }}

                                </button>
                            </form>




                            </div>
                        </div><br>

                    </div>

            </div>

    </div>






</div>










@endsection
