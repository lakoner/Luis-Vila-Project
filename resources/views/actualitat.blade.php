@extends('templates.header_footer_front')


@section('content')

<main class="content-framwork-1">


        <div class="content-news card">
            <div class="content-image-news card">
            @foreach($actualidades as $actualidad)
            <img class="news-front" src="{{asset('storage').'/'.$actualidad->image}}" alt="">
            </div>
            <div class="content-data-news">
                <h1>{{$actualidad->title}}</h1>
                <h4>{{$actualidad->subtitle}}</h4>
                <p class="text-new-back">{{$actualidad->text}}</p>
                <p class="date"><small>{{$actualidad->date}}</small></p>
            </div>
        </div>

        @endforeach
 <br>

</main>

@endsection


