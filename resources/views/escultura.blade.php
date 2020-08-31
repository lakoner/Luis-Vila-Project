@extends('templates.header_footer_front')

@section('content')
<div class="content-framwork-1">
    <div class="inter-menu">
        <nav>
            <a href="">Eat Art</a>
            <a href="">Disseny</a>
            <a href="">Escultura</a>
            <a href="">Pintura</a>
            <a href="">Volcà</a>

        </nav>
    </div>
    <br><br>

    <!-- <form action="">
        <label for="">Filtrar Serie</label>
            <select class="form-control" name="categoria_id">
                <option hidden selected> </option>

                @foreach($series as $serie)
                <option value="{{$serie->id}}">{{$serie->name}}</option>
                @endforeach
            </select>
            <br>
            <input class="btn btn-primary" type="submit" value="filtrar"><a href="{{url('/actualidad/create')}}"><button class="btn btn-success float-right">Crear Noticia</button><br><br><br></a>
            </div>

     </form> -->
<div class="content-obra-img">
    @foreach($obras as $obra)

<div class="content-pintura-data">
    <div class="content-pintura-img">
        <img class="img-pintura" src="{{asset('storage').'/'.$obra->image}}" alt="" name="image">
    </div>
    <h4><b>{{$obra->name}}</b></h4>
    <h6>{{$obra->categoria->name}}</h6>
</div>









    @endforeach
</div>
</div>
@endsection



