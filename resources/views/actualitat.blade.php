@extends('templates.header_footer_front')


@section('content')

<main class="content-framwork-1">
        @foreach($actualidades as $actualidad)
            <a href="{{url('/noticia/'.$actualidad->id)}}">
                <div class="content-news card">
                    <div class="content-image-news card">
                        <img src="{{asset('storage').'/'.$actualidad->image}}" alt="">
                    </div>
                    <div class="content-data-news">
                        <h1>{{$actualidad->title}}</h1>
                        <h4>{{$actualidad->subtitle}}</h4>
                    <div class="text-news-front"><p>{{$actualidad->text}}</p></div>
                        <p class="date"><small>{{$actualidad->date}}</small></p>
                    </div>
                </div>
            </a>
        @endforeach


</main>

@endsection


