<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ config('app.name', 'Lluís Vilà') }}</title>

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com" />
        <link
            href="https://fonts.googleapis.com/css?family=Nunito"
            rel="stylesheet"
        />
        <link
            href="https://fonts.googleapis.com/css2?family=DM+Mono:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap"
            rel="stylesheet"
        />
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.13.0/css/all.css"
            integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"
            crossorigin="anonymous"
        />

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


        <!-- Scripts ajax y bootstrap -->
        <link rel="stylesheet" href="carousel.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    </head>
    <body>
    <header>
        <div>
            <h1><a href="{{url('/')}}">Lluís Vilà</a></h1>
            <div>
                <nav>
                    <a href="{{url('/inici/')}}">Inici</a>
                    <a href="{{url('/obra/')}}">Obra</a>
                    <a href="{{url('/biografia/')}}">Biografía</a>
                    <a href="{{url('/actualitat/')}}">Actualitat</a>
                    <a href="{{url('/bibliografia/')}}">Bibliografía</a>
                    <a href="{{url('/contactar/')}}">Contactar</a>
                </nav>
            </div>

        </div>

    </header>


    </body>
</html>
