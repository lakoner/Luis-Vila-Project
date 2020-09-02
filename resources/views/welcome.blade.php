
@extends('templates.header_footer_front')


@section('content')
<div id="carouselExampleFade" class="carousel slide carousel-fade welcome" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <a href="#"><img src="/img/slideWelcome/LluisVila_Absolut_nosaltres_slide.jpg" class="d-block w-100" alt="..." data-toggle="modal" data-target="#exampleModal1">
    </a></div>
    <div class="carousel-item">
     <a href="#"> <img src="/img/slideWelcome/LluisVila_Absolut_HarmoniaCaotica_slide.jpg" class="d-block w-100" alt="..." data-toggle="modal" data-target="#exampleModal2">º
    </a></div>
    <!-- <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div> -->
  </div>
  <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tanca</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content2">

      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tanca</button>
      </div>
    </div>
  </div>
</div>



@endsection






