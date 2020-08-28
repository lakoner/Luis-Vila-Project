@extends('templates.header_footer_front')


@section('content')

<main class="content-framwork-1">

@foreach($actualidades as $actualidad)
<h1>{{$actualidad->title}}</h1>
<h1>{{$actualidad->subtitle}}</h1>

@endforeach


</main>

@endsection
