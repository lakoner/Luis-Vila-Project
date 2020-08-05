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
        <script src="{{ asset('js/scripts.js') }}" defer></script>


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
        <script src="{{ asset('js/scripts.js') }}" defer></script>


    </head>
    <body>
    <header>
        <div class="header">
            <div class="menu"><h1 class="logo"><a href="{{url('/')}}">LLUÍS VILÀ</a></h1>
                <nav>
                    <a href="{{url('/obra/')}}">OBRA</a>
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

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
    </html>



