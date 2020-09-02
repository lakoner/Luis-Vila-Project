@extends('templates.header_footer_front')

@section('content')
<body onload="menuEat_art()">


<div class="content-framwork-1">
    <div class="inter-menu">
        <nav>
            <a id="eat_art" href="{{url('/eat_art')}}">Eat Art</a>
            <a id="diseño" href="{{url('/diseño')}}">Diseño</a>
            <a id="escultura" href="{{url('/escultura')}}">Escultura</a>
            <a id="pintura" href="{{url('/pintura')}}">Pintura</a>
            <a id="volcan" href="{{url('/volcan')}}">volcan</a>
        </nav>
    </div>
        <div class="p-all-wide">
            <p>
                Lluís Vilà des de els seus començaments autodidactes i malgrat la seva facilitat pel dibuix i per l'aplicació del color, va triar el difícil camí de l'experimentació per presentar una batalla oberta a l'art tradicional. Des d'un vessant multidisciplinar, ha indagat en molts camps artístics, desencadenant un corpus unitari que permet discernir en la seva obra un segell enormement original i personal.
                <br><br>
                Així d'una manera espontània ha reciclat llenguatges d'avantgarda per donar-los una dimensió irònica, provocativa, maliciosa i crítica, tot incorporant la més rica varietat d'elements i els materials    peculiars i inospitats. El seu rebuig al consumisme social contribuí a interessar-se - ja desde els seus inicis - pel material comestible i pels aliments, quelcom que l'home es veu indefectiblement obligat a consumir.
                <br><br>
                Han estat, doncs, les propostes artifàgiques, el fil conductor d'un discurs que, al llarg de la seva trajectòria, han  intentat criticar la societat consumista devoradora i fagocitadora dels valors humans: és evident que el "muntatge" social queda absolet ràpidament per reduir la necessitat de l'home al simple fet consumidor.
            </p>


        </div>
        <div class="content-colums-miro">
            <div class="eat_art1"></div>
            <div class="eat_art2"></div>
            <div class="eat_art3"></div>
        </div>
        <p><i>Fundació Miró</i></p>
        <div class="p-all-wide">

             <p>
                Les primeres manifestacions plàstiques de Lluís Vilà comencen als anys setanta amb un art efímer i fungible, atacant la provisionalitat de tot el que ens envolta. En aquests montatges artifàgics, el menjar adopta un caràcter escultòric, fugint de la recerca purament estàtica per introduir-se en la profanació de l'objecte comestible.
                <br><br>
                - Sabates recobertes amb elements menjables ("Sabates comestibles", Metropol, Barcelona 1982);
                <br><br>
                - La instal.lació construïda a base de revestir un espai amb fulles de col ("Collage", pati de la Casa de Cultura de Girona,
                1983);
                <br><br>
                - Els personatges i muntatges construïts a base de manipulació i ensamblatges d'una gran varietat de pans ("Entrepà
                enlluït",  Espai 10 de la Fundació Miró, 1984);
                <br><br>
                - L'estat degradant de les triadures embotides en una fletxa de plàstic ("De laberint" pati de la Fundació Miró 1984,
                instal.lació que fou retirada pels organitzadors a causa del malestar que va provocar);
                <br><br>
                - La referència indirecta als cicles vitals que desencadena la naturalesa (acció "Arburguesa",  Banyoles, 1984 );
                <br><br>
                - La instal.lació amb cols i verdures embutides en plàstics ("Canvi de pell", façana de l'Ajuntament de Pamplona, 1985);
                <br><br>
                - La màquina fagocitadora de plats i culleres repicant (Sala Montcada, Barcelona, 1985);
                <br><br>
                - La sèrie inspirada en l'enllaunament com estètica del mercat ("Apologia contemporània de la Garrotxa", Olot 1986),
                etc... o sia referències al menjar com a paradigma del consum, a partir dels quals manifesta una dura posició crítica de
                denúncia social, alhora que ofereix una visió irònica i caústica del món de l'objecte.
            </p>
        </div>
<!--Carousel Wrapper-->
<a href="#">
<div id="multi-item-example" class="carousel slide carousel-multi-item carousel-multi-item-2" data-ride="carousel">

  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <a class="black-text1" href="#multi-item-example" data-slide="prev"><i class="fas fa-angle-left fa-3x pr-3"></i></a>
    <a class="black-text2" href="#multi-item-example" data-slide="next"><i class="fas fa-angle-right fa-3x pl-3"></i></a>
        <!--First slide-->
    <div class="carousel-item active">

     <div class="col-md-3 mb-3">
       <div class="card">
         <img class="img-fluid" src="/img/shoes/mini/LluisVila_SabatesComestibles_00.jpg" data-toggle="modal" data-target="#exampleModal1"
            alt="Lluis Vila">
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src="/img/shoes/mini/LluisVila_SabatesComestibles_01.jpg"
            alt="Card image cap">
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src="/img/shoes/mini/LluisVila_SabatesComestibles_02.jpg"
            alt="Card image cap">
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src="/img/shoes/mini/LluisVila_SabatesComestibles_03.jpg"
            alt="Card image cap">
        </div>
      </div>

    </div>
    <!--/.First slide-->

    <!--Second slide-->
    <div class="carousel-item">

      <div class="col-md-3 mb-3">
        <div class="card">
          <a href="#"><img class="img-fluid" src="/img/shoes/mini/LluisVila_SabatesComestibles_04.jpg"
            alt="Card image cap"></a>
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src="/img/shoes/mini/LluisVila_SabatesComestibles_06.jpg"
            alt="Card image cap">
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src="/img/shoes/mini/LluisVila_SabatesComestibles_08.jpg"
            alt="Card image cap">
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src="/img/shoes/mini/LluisVila_SabatesComestibles_010.jpg"
            alt="Card image cap">
        </div>
      </div>

    </div>
    <!--/.Second slide-->

    <!--Third slide-->
    <div class="carousel-item">

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src="/img/shoes/mini/LluisVila_SabatesComestibles_011.jpg"
            alt="Card image cap">
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src="/img/shoes/mini/LluisVila_SabatesComestibles_014.jpg"
            alt="Card image cap">
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src="/img/shoes/mini/LluisVila_SabatesComestibles_015.jpg"
            alt="Card image cap">
        </div>
      </div>

      <div class="col-md-3 mb-3">
        <div class="card">
          <img class="img-fluid" src="/img/shoes/mini/LluisVila_SabatesComestibles_017.jpg"
            alt="Card image cap">
        </div>
      </div>

    </div>
    <!--/.Third slide-->

  </div></a>
  <!--/.Slides-->

</div>
<div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content1">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

    <div class="carousel-inner" role="listbox">

    <a class="black-text1" href="#multi-item-example" data-slide="prev"><i class="fas fa-angle-left fa-3x pr-3"></i></a>
    <a class="black-text2" href="#multi-item-example" data-slide="next"><i class="fas fa-angle-right fa-3x pl-3"></i></a>

            <div class="carousel-item1">
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img class="img-fluid" src="/img/shoes/mini/LluisVila_SabatesComestibles_00.jpg"
                        alt="Card image cap">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img class="img-fluid" src="/img/shoes/mini/LluisVila_SabatesComestibles_00.jpg"
                        alt="Card image cap">
                    </div>
                </div>
            </div>

    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tanca</button>
      </div>
    </div>
  </div>
</div>

</div>
</body>
    @endsection
