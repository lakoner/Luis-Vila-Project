<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
<<<<<<< HEAD
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
=======
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
    integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V" crossorigin="anonymous">



</head>
<body class="background-admin">
  <div id="app">
>>>>>>> obras
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
<<<<<<< HEAD
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
=======
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Accede') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Nuevo Usuario') }}</a>
>>>>>>> obras
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
<<<<<<< HEAD
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

=======
                                <a class="dropdown-item" href="{{ url('welcome') }}">
                                        <i class="fas fa-step-forward"></i>&nbsp; {{ __('Ir a Lluís Vilà') }}</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="fas fa-sign-out-alt"></i>&nbsp; {{ __('Cerrar sesion') }}
                                    </a>


>>>>>>> obras
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
<<<<<<< HEAD
=======
        <div class="admin-panel">


                    <div><h1><b>Lluís Vilà </b></h1></div>



                    <ul class="nav nav-pils nav-stacked">
                    <a class="link-a" href="{{url('/home')}}"><li class="{{'home' == request()->path() ? 'active-back' : '' }}"><i class="fas fa-home"></i>&nbsp;<b>Inicio</b></li></a>
                    <a class="link-a" href="{{url('/obra')}}"><li class="{{'obra' == request()->path() ? 'active-back' : '' }}"><i class="fas fa-palette"></i>&nbsp;<b>Obras</b></li></a>
                    <a class="link-a" href="{{url('/obra/create')}}"> <li class="{{'obra/create' == request()->path() ? 'active-back' : '' }}"><i class="fas fa-plus"></i>&nbsp;<b>Añadir Obra</b></li></a>
                    <a class="link-a" href="{{url('/actualidad')}}"> <li class="{{'actualidad' == request()->path() ? 'active-back' : '' }}"><i class="fas fa-newspaper"></i>&nbsp;<b>Noticias</b></li></a>
                    <a class="link-a" href="{{url('/actualidad/create')}}"> <li class="{{'actualidad/create' == request()->path() ? 'active-back' : '' }}"> <i class="fas fa-upload"></i>&nbsp;<b>Subir Noticia</b></li></a>
                    <a class="link-a" href="{{url('/usuarios')}}"><li class="{{'register' == request()->path() ? 'active-back' : '' }} bottom"><i class="fas fa-user"></i>&nbsp;<b>Usuaris</b></li></a>
                    </ul>
        </div>


>>>>>>> obras

        <main class="py-4">
            @yield('content')
        </main>
<<<<<<< HEAD
    </div>
</body>
</html>
=======
</div>


</body>
</html>

>>>>>>> obras
