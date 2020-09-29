@extends('templates.header_footer_front')

@section('content')
<body onload="menuDiseño()">


<div class="content-framwork-1">
        <div class="inter-menu">
            <nav>
                <a id="eat_art" href="{{url('/eat_art')}}">Eat Art</a>
                <a id="diseño" href="{{url('/diseño')}}">Diseño</a>
                <a id="escultura" href="{{url('/escultura')}}">Escultura</a>
                <a id="pintura" href="{{url('/pintura')}}">Pintura</a>
                <a id="volcan" href="{{url('/volcan')}}">volcan</a>
            </nav>
        </div><br><br>


        <div class="content-obras">
            <div class="row">
                @foreach($obras as $obra)

            <div class="col-md-4 column">
                <div class="box">
                    <a href="#"> <img class="obra-img" src="{{asset('storage').'/'.$obra->image}}" data-toggle="modal" data-target="#image{{ $obra->id }}" data-whatever="@mdo" alt="" name="image"></a>
                    <!-- <div class="content-info">
                        <div class="name"> <h4><b>{{$obra->name}}</b></h4></div>
                        <div> <h4><b>{{$obra->technique}}</b></h4></div>
                        <div> <h4><b>{{$obra->serie->name}}</b></h4></div>
                    </div> -->
            </div>


            <div class="modal fade" id="image{{ $obra->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header modal-close">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img class="modal-img" src="{{asset('storage').'/'.$obra->image}}" alt="" name="image">

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cierra</button>
                            </div>
                        </div>
                    </div>
                </div></div>



            @endforeach
        </div><br><br>

        </div>
</div>

</body>
@endsection
