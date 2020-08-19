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
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"/>
        <link href="https://fonts.googleapis.com/css2?family=DM+Mono:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css" integrity="sha384-Bfad6CLCknfcloXFOyFnlgtENryhrpZCe29RTifKEixXQZ38WheV+i/6YWSzkz3V"crossorigin="anonymous"/>

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">


        <!-- Scripts ajax y bootstrap -->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



    </head>
    <body>
    <header>
        <div class="header">
            <div class="menu"><h1 class="logo"><a href="{{url('/')}}">LLUÍS VILÀ</a></h1>
                <nav>
                    <a href="{{url('/obras/')}}">OBRA</a>
                    <a href="{{url('/biografia/')}}">BIOGRAFÍA</a>
                    <a href="{{url('/actualitat/')}}">ACTCUALITAT</a>
                    <a href="{{url('/prensa/')}}">PRENSA</a>
                    <a href="{{url('/contactar/')}}">CONTACTAR</a>
                </nav>
                <div class="lang">
                    <a href="">CAT</a>
                    <a href="">ES</a>
                </div>

            </div>

        </div>

    </header>

    <body>

    @yield('content')

    <footer>
    <div class="footer">
        <div class="content">
            <ul>
                <li>LLUÍS VILÀ</li><div class="lv"></div>
                <a href="http://www.fundaciolluiscoromina.org/"> <li> &copy  Fundació Lluís Coromina</a></li><div class="lv"></div>
                <a href="mailto:fundacio@fundaciolluiscoromina.org"> <li> fundacio@fundaciolluiscoromina.org</a></li><div class="lv"></div>
                <a href="tel:+3400972583477"> <li>Telf. 972 58 34 77</a></li><a href="#"><div class="insta"></a></div><a href="http://www.factoriaf5.org/"><div class="f5"></div></a>
            </ul>
        </div>

    </div>

</footer>



</body>
    </html>



