@extends('templates.header_footer_front')


@section('content')
<div class="content-framwork-1">
<div class="content-obra-menu">
<div class="eat-art"><a href="{{url('/eat_art/')}} "><h3>EAT ART</h3></a></div>
<div class="escultura"><a href="{{url('/escultura/')}}"><h3>ESCULTURA</h3></a></div>
<div class="volca"><a href="{{url('/volcan/')}}"><h3>VOLCÁN</h3></a></div>
<div class="pintura"><a href="{{url('/pintura/')}}"><h3>PINTURA</h3></a></div>
<div class="disseny"><a  href="{{url('/diseño/')}}"><h3>DISEÑO</h3></a></div>




</div>
</div>
@endsection


