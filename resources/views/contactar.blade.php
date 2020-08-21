@extends('templates.header_footer_front')

@section('content')

<body>
    
  
      <div class="ImgFondo">
        <div class="container">  
          <form id="contact" action="" method="post">
            <h3>Consulta</h3>
            <h4>Para consultas generales puede contactar con nosotros rellenando el siguiente formulario:</h4>
            <fieldset class="FielsetContact">
              <input placeholder="Nombre" type="text" tabindex="1" required autofocus>
            </fieldset class="FielsetContact">
            <fieldset class="FielsetContact">
              <input placeholder="Email Address" type="email" tabindex="2" required>
            </fieldset>
            <fieldset class="FielsetContact">
              <input placeholder="Numero de Telefono (optional)" type="tel" tabindex="3" required>
            </fieldset>
            <fieldset class="FielsetContact">
              <input placeholder="Nombre de Organizacion (optional)" type="text" tabindex="4" required>
            </fieldset>
            <fieldset class="FielsetContact">
              <textarea placeholder="Mensaje" tabindex="5" required></textarea>
            </fieldset>
            <fieldset class="FielsetContact">
              <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Enviar</button>
            </fieldset>
          </form>
        </div>  
      </div>
    
</body>
@endsection


