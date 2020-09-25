@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
=======



<div class="content-admin">
    <div class="content-header">
        <h1><i class="fas fa-home"></i>&nbsp;<b>Inicio</b>
            <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                <a href="{{url('/')}}">
                    <label class="btn btn-secondary header-left-button">
                        <i class="far fa-eye fa-2x"></i>&nbsp;Ir a Lluí Vila
                    </label></a>
            </div>
        </h1>
    </div>

    <div class="welcome-admin">
        <br><br><br><br><br>





        <h1><b>Bienvenido {{ auth()->user()->name }}</b></h1>

    </div>
<br><br>
        <div class="home-container">
            <a href="{{url('obra')}}">
                <div class="home-content-button">
                    <div class="home-obras">
                        <i class="fas fa-palette fa-5x"></i>
                       <h1> Obras</h1>
                </div>
            </a>
            </div>


            <div class="home-content-button">
                <a href="{{url('obra/create')}}">
                    <div class="home-obras-up">
                        <i class="fas fa-plus fa-5x"></i>
                        <h1>Añadir Obra</h1>
                    </div>
                </a>
            </div>

            <div class="home-content-button">
                <a href="{{url('noticias')}}">
                    <div class="home-noticias">
                        <i class="fas fa-newspaper fa-5x"></i>
                        <h1>Noticias</h1>
                    </div>
                </a>
            </div>

            <div class="home-content-button">
                <a href="{{url('noticias/create')}}">
                    <div class="home-noticias-up">
                        <i class="fas fa-upload fa-5x"></i>
                        <h1>Subir Noticia</h1>
                    </div>
                </a>
            </div>
            <div class="home-content-button">
                <a href="{{route('usuarios.index')}}">
                    <div class="home-users">
                        <i class="fas fa-user fa-5x"></i>
                        <h1>Usuarios</h1>
                    </div>
                </a>
            </div>
        </div>










    <br><br><br>



@endsection

>>>>>>> obras
