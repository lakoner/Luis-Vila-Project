@extends('templates.header_footer_front')

@section('content')
<body onload="menuVolcan();menuObra();">

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
            La instalación Clàstics al volcán del Croscat invitado a participar por los ingenieros que han realizado la execución global
            de remodelación del Croscat, situado en la zona volcánica de la Garrotxa. Consta de un total de 329 metros de
            planchas metálicas oxidadas que cubren los muros de contención y de un sugerente conjunto escultórico de 20 metros,
             recorrido conceptual hecho con iconos, alimentos y grafías de recóndita simbología: diez episodios que muestran
             el diálogo entre hombre y naturaleza.<br><br>
             Muchas veces, más allá de la reflexión pragmática, la interpretación del sitio proporciona una de las claves fundamentales
             del discurso, ya que es la propia geología escultórica del Croscat -consecuencia de la violación sistemática
              cometida durante los años de su explotación- la que inspiró a Vilà para esta instalación. Según el mismo autor
               "esta enorme masa en sí es una de las mejores lecciones de escultura que he recibido, además, a un nivel
               enérgico, experimentaba la sensación de vitalidad para la creatividad presente en la naturaleza y por el
               perfecto equilibrio que goza esta. Así pues, pienso en la lucha continua del hombre para conseguir este
               equilibrio. Es imprescindible que tome ejemplo de ella para poder encontrar la libertad y la creatividad
               individual".
                <br><br>

            </p>

        </div>
        <div class="content-colums-miro">
            <div class="volca1"></div>
            <div class="volca2"></div>
            <div class="volca3"></div>
        </div>

        <div class="p-all-wide">
        <p>
        Si bien su participación consistía en dejar evidenciar su "gesto" en el aspecto final de la obra, Vilà tuvo
         desde los inicios del proyecto y durante su desarrollo, la ocasión de poder plantear y sugerir, siempre
          desde de su propio lenguaje artístico, su punto de vista sobre proporciones, materiales y cromatismos.
El significado de la palabra clásticos (formado por fragmentos) es la base conceptual del diseño histórico y
estético de la instalación, en la que Vilà despliega sus grafías ilegibles sobre unas planchas de acero, como si
fueran pizarras para una "no-lectura" desde la provisionalidad de la existencia humana. Una vez más la ironía, uno de
 los rasgos más característicos de Vilà, vuelve a fluir. La elección de tres elementos de gran fuerza y carga
  simbólica quedan fosilizados en integrarlos en los relieves de las planchas de acero: el pan, símbolo de la
  naturaleza, aspecto astrológico de Saturno que representa el tiempo, el hambre que devora la vida y consume
  todas las creaciones; la piedra, símbolo del ser, para lo cual Vilà eligió unos fragmentos de lava expulsada y
  los fundió en acero -así, la mano del hombre da la vuelta al proceso y los devuelve a su origen-; y finalmente,
   el árbol, símbolo de la realidad absoluta y de la tradición - un trozo de rama de cerezo puede representar
   los deseos terrenales, esperando que surja la necesidad urgente de establecer un diálogo de relación.  <br><br>
        </p>
        </div>

        <div class="content-colums-miro">
            <div class="volca4"></div>
            <div class="volca5"></div>
            <div class="volca6"></div>
        </div>

        <div class="p-all-wide">

        <p>El Volcán Croscat, de tipo estromboliano monogénico, es el más alto de la península Ibérica (180m).
            También es el último que entró en erupción (9500 años aC), por lo que conjuga utilidad didáctica y
            turística, su estado de conservación geológica es notable, exceptuando sus vertientes norte y noroeste.
             Se encuentra en pleno corazón del Parque Natural de la Zona Volcánica de la Garrotxa, declarado
             Reserva Natural en 1982 por su originalidad geológica y científica de primer orden.
             El proyecto de restauración lo realizaron Martirià Figueras y Joan Font, ingenieros agrícolas
             especializados en paisagimso e impacto ambiental, respectivamente.</p><br><br>
        <p>
        Mar Requena<br>
        Del Libro LANSCAPE ART, de la colección<br>
        World of enviromental design<br>
        de la editorial ARCO
        </p>
</div>






</div>

</body>
    @endsection
