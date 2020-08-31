@extends('templates.header_footer_front')

@section('content')
<div class="content-framwork-1">
    <div class="inter-menu">
        <nav>
            <a href="">Eat Art</a>
            <a href="">Disseny</a>
            <a href="">Escultura</a>
            <a class="active" href="">Pintura</a>
            <a href="">Volcà</a>

        </nav>
    </div>
    <br><br>


               <div class="filter-series float-right">

               <form action="{{Route('serie.filterSerie')}}">

               <label class="btn btn-secondary">
               <select class="form-group" name="serie_id">
                            <option hidden selected> Filtra por Series</option>
                                @foreach($series as $serie)
                                <option value="{{$serie->id}}">{{$serie->name}}</option>
                                @endforeach
                            </select>
                            </label>
                            <label class="btn btn-secondary">
                            <input class="filter-btn" type="submit" value="Filtra">
                            </label>
                </form>
            </div>
        </div>





<div class="content-obra-img">
    @foreach($obras as $obra)

<div class="content-pintura-data">
    <div class="content-pintura-img">
        <img class="img-pintura" src="{{asset('storage').'/'.$obra->image}}" alt="" name="image">
    </div>
    <h4><b>{{$obra->name}}</b></h4>
    <h6>{{$obra->categoria->name}}</h6>
    <h6>{{$obra->serie->name}}</h6>
</div>









    @endforeach
</div>
@endsection
