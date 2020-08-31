@extends('templates.header_footer_front')

@section('content')


<body>
  <main class="content-framwork-1">
      <div class="FilaDeImg">
          <div class="CuadroIMGDisseny" ><img id="myImg1"  class="ImgStyle" src="\img\Prensa\prensa1.jpg" alt="Snow"></div>
          <div class="CuadroIMGDisseny" ><img id="myImg2" class="ImgStyle" src="\img\Prensa\prensa2.jpg" alt="Snow"></div>
          <div class="CuadroIMGDisseny" ><img id="myImg3" class="ImgStyle" src="\img\Prensa\prensa3.jpg" alt="Snow"></div>
      </div>

      <div class="FilaDeImg">
          <div class="CuadroIMGDisseny" ><img id="myImg4" class="ImgStyle" src="\img\Prensa\prensa4.jpg" alt="Snow"></div>
          <div class="CuadroIMGDisseny" ><img id="myImg5" class="ImgStyle" src="\img\Prensa\prensa5.jpg" alt="Snow"></div>
          <div class="CuadroIMGDisseny" ><img id="myImg6" class="ImgStyle" src="\img\Prensa\prensa6.jpg" alt="Snow"></div>
      </div>

      <div class="FilaDeImg">
          <div class="CuadroIMGDisseny" ><img id="myImg7" class="ImgStyle" src="\img\Prensa\prensa7.jpg" alt="Snow"></div>
          <div class="CuadroIMGDisseny" ><img id="myImg8" class="ImgStyle" src="\img\Prensa\prensa8.jpg" alt="Snow"></div>
          <div class="CuadroIMGDisseny" ><img id="myImg9" class="ImgStyle" src="\img\Prensa\prensa9.jpg" alt="Snow"></div>
      </div>

      <div class="FilaDeImg">
        <div class="CuadroIMGDisseny" ><img id="myImg10" class="ImgStyle" src="\img\Prensa\prensa10.jpg" alt="Snow" ></div>
        <div class="CuadroIMGDisseny" ><img id="myImg11" class="ImgStyle" src="\img\Prensa\lavanguardia.jpg" alt="Snow"></div>
        <div class="CuadroIMGDisseny" ><img id="myImg12" class="ImgStyle" src="\img\Prensa\LluisVila_articleartsvisuals.jpg" alt="Snow" ></div>
    </div>

    <div id="myModal" class="modal">
      <span class="close">&times;</span>
      <img class="modal-content" id="img01">
      <div id="caption"></div>
    </div>

      <script>
        var span = document.getElementsByClassName("close")[0];

        span.onclick = function() {
          modal.style.display = "none";
        }
        var modal = document.getElementById("myModal");

        var img = document.getElementById("myImg1");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        var img = document.getElementById("myImg2");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        var img = document.getElementById("myImg3");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        var img = document.getElementById("myImg4");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        var img = document.getElementById("myImg5");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        var img = document.getElementById("myImg6");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        var img = document.getElementById("myImg7");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        var img = document.getElementById("myImg8");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        var img = document.getElementById("myImg9");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        var img = document.getElementById("myImg10");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        var img = document.getElementById("myImg11");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
        var img = document.getElementById("myImg12");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
          modal.style.display = "block";
          modalImg.src = this.src;
          captionText.innerHTML = this.alt;
        }
      </script>
    </main>
</body>
@endsection







