@extends('layout.main')

@section('title','Contactos')

@section('content')

<!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <style>
        footer {
          color: aliceblue;
          position: fixed;
          bottom: 0px;
          width: 100%;
          height: 5%;
        }
    .mural{
        position: relative;
        top: 20px;
        background-color: black;
        /* Adapto a la pantalla*/
        width: 90%;
        max-width: 1200px;

        height: 150px;
        display:block;
        margin:auto;
        flex-direction:row;
        border-radius: 25px;
        border:5px solid #FF0000;
        border-color:yellow;
      }


        .fondo{
        /* Desplazo mi figura */
          top: 80px;
          position: relative;
          padding: 15px;
        /*Ancho de imagen*/
        width: 125px;
        /*Borde del elemento*/
        /*Centar imagen*/

        display:block;
        margin:auto;
        border-radius: 30%;
        border:5px solid #FF0000;
        border-color:yellow;
        background-color: white;
      }
      .texto {
        position: relative;
        top: 80px;
        font-size: 20px;
        text-align:center;
      }

        .contener {
        /*Mover hacia abajo el div */
        top: 20px;
        position: relative;


        margin: 0.7rem;
        padding: 20px 40px 20px 40px;
        border: 10px;
        /* IMPORTANTE */
        text-align: center;
          display: flex;
          flex-direction:row;
          justify-content: space-around;
          align-items:center;
      }

      .subtitulo1 {
        font-size: 30px;
      }


</style>

<h1>Contáctanos</h1>

    <div class="mural">

    <img src="https://cdn-icons-png.flaticon.com/512/2034/2034062.png" class="fondo" >
    </div>
<div class ="texto">
<hr>
<h1 class="subtitulo1">Quito</h1>
<P>Citas taller: 1800 736 285</p>
<p>Servicio de grua: 09996 555 429
</p>
<hr>
<h1 class="subtitulo1">Redes sociales</h1>
</div>
        <br>
        <div class="contener">
        <div class="item">
        <br>

        <div class="img" id="div1" ondrop="drop(event)" ondragover="allowDrop(event)">
            <a href="https://web.whatsapp.com/"><img src="https://cdn-icons-png.flaticon.com/512/733/733585.png" width="40px" height="40px"></a>
        </div>

        </div>
        <div class="item">

        <div class="img" id="div2" ondrop="drop(event)" ondragover="allowDrop(event)">
            <a href="https://facebook.com/"><img src="https://cdn-icons-png.flaticon.com/512/733/733547.png" width="40px" height="40px"></a>
        </div>
        </div>
        <div class="item">

        <div class="img" id="div3" ondrop="drop(event)" ondragover="allowDrop(event)">
            <a href="https://instagram.com/"><img src="https://cdn-icons-png.flaticon.com/512/2111/2111463.png" width="40px" height="40px"></a>
        </div>
    </div>
</div>

@endsection()
