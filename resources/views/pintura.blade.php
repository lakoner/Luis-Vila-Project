@extends('templates.header_footer_front')

@section('content')
<main class="content-framwork-1">
    <div class="inter-menu">
        <nav>
            <a href="">Eat Art</a>
            <a href="">Disseny</a>
            <a href="">Escultura</a>
            <a href="">Pintura</a>
            <a href="">Volcà</a>

        </nav>
    </div>

    @foreach($obras as $obra)
<br><br>



    <img class="img-obra" src="{{asset('storage').'/'.$obra->image}}" alt="" name="image">

    @endforeach

@endsection
