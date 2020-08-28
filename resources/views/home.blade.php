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

    <br><br><br>

</main>

@endsection

