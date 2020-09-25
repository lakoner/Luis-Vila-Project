@extends('templates.header_footer_front')

@section('content')
<body onload="menuEat_art();menuObra();">


<div class="content-framwork-1">

    <div class="inter-menu">
        <nav>
            <a id="eat_art" href="{{url('/eat_art')}}">Eat Art</a>
            <a id="diseño" href="{{url('/diseño')}}">Diseño</a>
            <a id="escultura" href="{{url('/escultura')}}">Escultura</a>
            <a id="pintura" href="{{url('/pintura')}}">Pintura</a>
            <a id="volcan" href="{{url('/volcan')}}">Volcán</a>
        </nav>
    </div>
    <br><br>
        <div class="p-all-wide">
            <p>
            Lluís Vilà desde sus comienzos autodidactas y a pesar de su facilidad por el dibujo y por la aplicación del color,
            eligió el difícil camino de la experimentación para presentar una batalla abierta al arte tradicional. Desde una vertiente multidisciplinar, ha indagado
            en muchos campos artísticos, desencadenando un corpus unitario que permite discernir en su obra un sello enormemente original y personal.                <br><br>
            Así de una manera espontánea ha reciclado lenguajes de vanguardia para darles una dimensión irónica, provocativa, maliciosa y crítica, incorporando la más rica variedad de
            elementos y los materiales más peculiares y inóspitos. Su rechazo al consumismo social contribuyó a interesarse - ya desde sus inicios - por el material
            comestible y por los alimentos, algo que el hombre se ve indefectiblemente obligado a consumir.
                <br><br>
            Han sido, pues, las propuestas artifágicas, el hilo
            conductor de un discurso que, a lo largo de su trayectoria, han intentado criticar la sociedad consumista devoradora y fagocitadora de los valores humanos:
            es evidente que el "montaje" social queda obsoleto rápidamente para reducir la necesidad del hombre al simple hecho consumidor.            </p>


        </div>
        <div class="content-colums-miro">
            <div class="eat_art1"></div>
            <div class="eat_art2"></div>
            <div class="eat_art3"></div>
        </div>
        <p><i>Fundacion Miró</i></p>
        <div class="p-all-wide">

             <p>
            Las primeras manifestaciones plásticas de Lluís Vilà comienzan en los ańos setenta con un arte efímero y fungible, atacando la provisionalidad de todo
            lo que nos rodea. En estos montajes artifágicos, la comida adopta un carácter escultórico, huyendo de la investigación puramente estática para
            introducirse en la profanación del objeto comestible. <br><br>
            - Zapatos recubiertas con elementos comestibles ( "Zapatos comestibles", Metropol, Barcelona 1982);<br><br>
            - La instalación construida a base de revestir un espacio con hojas de col ( "Collage", patio de la Casa de Cultura de Girona, 1983);
                <br><br>
            - Los personajes y montajes construidos a base de manipulación y ensamblajes de una gran variedad de panes ( "Bocadillo enlucido", Espacio 10 de la Fundación Miró, 1984);
                <br><br>
            - El estado degradante de las triadures embutidas en una flecha de plástico ( "De laberinto" patio de la Fundación Miró, 1984 - instalación que fue retirada
            por los organizadores debido al malestar que provocó);
                <br><br>
                - La referencia indirecta a los ciclos vitales que desencadena la naturaleza (acción "Arburguesa",
                Banyoles, 1984);
                <br><br>
                - La instalación con coles y verduras embutidas en plásticos ( "Cambio de piel", fachada del Ayuntamiento de Pamplona, ??1985);
                <br><br>
                - La máquina fagocitadora de platos y cucharas repicando (Sala Montcada, Barcelona, ??1985);
                <br><br>
                - La serie inspirada en el enlatado como estética del mercado ( "Apología
                contemporánea de la Garrotxa ", Olot 1986), etc ... o sea referencias a la comida como paradigma del consumo, a partir de los cuales manifiesta una dura
                posición crítica de denuncia social, al tiempo que ofrece una visión irónica y caústica del mundo del objeto.
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
        <div class="p-all-wide">

        <p>
        Pero es preciso tener en cuenta que el tratamiento que aplica a la comida no es el de ofrenda ritual ni el de ceremonia festiva como lo hace Miralda, muy al contrario
        Vilŕ lo descontextualiza de su función habitual para transformarlo en un objeto "kitsch", para dejarlo degradar hasta la putrefacción o,
        ya recientemente, para enmarcarlo -una rebanada de pan, por citar un caso en concreto-, por destacar su humilde grandeza. El ritos nutricio deviene en sus manos, así
        pues, grotesco e instintivo al tiempo que alude al factor desagradable y provocador del hecho deglutible, ampliando para ello sus referencias en un entorno distinto a fin de
        enriquecer el sentido de la imagen.</p><br>

        <p>Su primer material de trabajo es el pan, alimento de primera necesidad y paradigma del consumo de primer orden que se ha convertido en el elemento recurrente
        en su trayectoria y el núcleo central de su investigación. Para Vilŕ, el pan con connotaciones religiosas, litúrgicas, festivas,
        costumbristas, etc ... es el más humilde  de los elementos comestibles y goza de una importante presencia cotidiana que ha hecho imprescindible en todas las culturas;
        un elemento, en definitiva, que sirve a un tiempo de unión entre las civilizaciones y de puente entre los pensamientos más ancestrales y los avances tecnológicos de hoy. De acuerdo
        con las múltiples lecturas rituales, sociales y tradicionales el pan constituye el común denominador en una sociedad de individuos relacionados en una empresa común
        llamada humanidad.
        </p><br>

        <p>Así, su origen escultórico lo podemos encontrar eun un repertorio de esculturas hechas con panes, utilizados como objetos encontrados en la manera dadaísta,
        aprovechándose de toda la herencia iconográfica surgida de la tradición popular. Barras, panecillos, barritas, bastones, panes de molde y de payés, tortas,
        ensaimadas, rebanadas o mendrugos son los materiales con el que ha trabajado de diferente forma para construir artefactos grotescos, juguetes caseros,
        imágenes populares, personajes estrafalarios y caricaturescos  extraidos de la realidad que nos rodea. Si en los primeros tiempos la utilización del apreciado alimento
        constituía tan sólo una nueva experiencia técnica empleada como física creativa, en sus obras más recientes se ha convertido en el símbolo de un compromiso social.
        </p><br>
        <p>
        Conxita Oliver<br>
        Membre AICA<br>
        </p>

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
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cierra</button>
            </div>
            </div>
        </div>
        </div>

    </div>
    </div>
</body>
    @endsection
