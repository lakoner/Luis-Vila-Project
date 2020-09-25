@extends('templates.header_footer_front')


@section('content')

<div class="content-noticias">
        @foreach($actualidades as $actualidad)
            <a  href="{{url('/noticia/'.$actualidad->id)}}">
                <div class="content-news card">
                    <div class="content-image-news">
                        <img src="{{asset('storage').'/'.$actualidad->image}}" alt="">
                    </div>

                    <div class="content-data-news">
                        <h1 class="ellipsis-noticia">{{$actualidad->title}}</h1>
                        <h4 class="ellipsis-noticia">{{$actualidad->subtitle}}</h4>
                    <div class="text-news-front"><p>{{$actualidad->text}}</p></div>
                        <p class="date"><small>{{$actualidad->date}}</small></p>
                    </div>
                </div>
            </a>
        @endforeach


</div>
@endsection


