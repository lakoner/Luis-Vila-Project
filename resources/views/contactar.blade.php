@extends('templates.header_footer_front')




@section('content')

<div class="content-framwork-1">

<form class="form-group" method="POST" action="">
                @csrf
<div class="row">
    <div class="col-md-12">
        <p>Texto</p>
        </div>
                    <div class="col-md-3">
                        <div class="card">
                        <br><div class="form-group form-cards">
                            <label for="">Nombre </label>
                            <input class="form-control" type="text" name="name">
                        </div>
                    </div>
                </div>



                    <div class="col-md-3">
                        <div class="card">
                        <br><div class="form-group form-cards">
                            <label for="">Organizacion </label>
                            <input class="form-control" type="text" name="organizacion">
                        </div>
                    </div>
                </div>



                    <div class="col-md-3">
                        <div class="card">
                        <br><div class="form-group form-cards">
                            <label for="">Correo electrónico </label>
                            <input class="form-control" type="mail" name="mail">
                        </div>
                    </div>
                </div>


                    <div class="col-md-3">
                      <div class="card">
                        <br><div class="form-group form-cards">
                            <label for="">telefono </label>
                            <input class="form-control" type="mail" name="telefono">
                            <small><b>* Opcional</b></small>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <br><br><div class="card">
                        <div class="form-group form-cards">
                        <label for="exampleFormControlTextarea1">Texto</label>
                            <textarea class="form-control" name="text" id="exampleFormControlTextarea1" rows="7"></textarea>
                        </div><br><br><br>
                    </div>
                </div>

                <div class="col-md-6">
                    <br><br>
                        <div class="form-group form-cards lluis_coromina">

                                <img style="width:100%"src="img/lluiscoromina.jpg" alt="">


                        </div><br><br>

                </div>




                <div class="col-md-12"><br><br>
                    <div class="card-footer footer-buttons">
                        <input type="submit" class="btn btn-secondary input-button" value="Enviar">


                    </div>
                </div>
                </form>
                    <br><br>

</div>
@endsection


