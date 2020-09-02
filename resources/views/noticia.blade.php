@extends('templates.header_footer_front')


@section('content')
<body onload="menuNoticia()">




<div class="content-noticia">

    @foreach($actualidades as $actualidad)
      <div class="noticia-top">
          <div class="content-image-noticia">
                <img class="img-noticia" src="{{asset('storage').'/'.$actualidad->image}}" alt="">

            </div><p class="date-noticia"><small>{{$actualidad->date}}</small></p>

            <div class="slide-noticia">
                <div class="scroll">
                    @foreach($noticiaSlide as $actualidad)
                    <a href="{{url('/noticia/'.$actualidad->id)}}"><div class="img-slide"><img class="img-noticia" src="{{asset('storage').'/'.$actualidad->image}}" alt=""></div>
            <div class="slide-title">{{$actualidad->title}}</div></a>
            @endforeach
            </div>
        </div>

        </div>



<h1>{{$actualidad->title}}</h1>
<h4><i>{{$actualidad->subtitle}}</i></h4>
<div class="noticia-text"><p>{{$actualidad->text}}</p></div>

<br>
    <a href="" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 'facebook-share-dialog', 'width=626,height=436,left=300,top=150'); return false;">
<img class="facebook" src="{{ asset('img/redes/facebook.png') }}" alt="facebook">
</a>
<br>




@endforeach


<script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');
</script>
</div>
</body>
@endsection
