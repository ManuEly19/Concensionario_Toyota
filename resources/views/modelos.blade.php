<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@section('title','Modelos')</title>
</head>
<body>
@extends('layout.main')
@section('content')
<style>
    #foto1{
        position:floatval;
        margin-left: 55px;
        margin-top: -2610px;
        width: 350px;
        height: 200px;

    }
    #foto2{
        position:floatval;
        margin-left: -305px;
        margin-top: -2010px;
        width: 350px;
        height: 200px;

    }
    #foto4{
        position:floatval;
        margin-left: -375px;
        margin-top: -830px;
        width: 350px;
        height: 200px;

    }
    #foto3{
        position:floatval;
        margin-left: -385px;
        margin-top: -1395px;
        width: 350px;
        height: 200px;

    }
    #foto5{
        position:floatval;
        margin-left: -305px;
        margin-top: -290px;
        width: 350px;
        height: 200px;

    }
    #p1{
        width: 500px;
        margin-top: -1350px;
        margin-left: 490px;
        position:relative;

        color: black;
    }
    #p2{
        width: 500px;
        margin-top: 160px;
        margin-left: 490px;
        position:relative;
        color: black;

    }
    #p3{
        width: 500px;
        margin-top: 210px;
        margin-left: 490px;
        position:relative;
        color: black;
        top: -44px;

    }
    #p4{
        width: 500px;
        margin-top: 152px;
        margin-left: 490px;
        position:relative;
        color: black;
        top: -44px;
    }
    #p5{
        width: 500px;
        margin-top: 54px;
        margin-left: 490px;
        position:relative;
        color: black;

    }
    .general{
        background-image: url("https://upload.wikimedia.org/wikipedia/commons/thumb/9/94/ToyotaLogoRedVer.svg/1200px-ToyotaLogoRedVer.svg.png");
        opacity: 0.88;
    }
</style>

<div class="general"  >

<h1>Modelos</h1>
<hr>
<div class="fondo">
<div class="modelosAutos">
@forelse($autos as $autitos =>$claves)

 <li>{{$autitos}}</li>

 <u>{{$claves}}</u>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
@empty
  <h3>No hay autos</h3>
@endforelse
<div id="fotos">
<img id="foto1" src="https://cdn.motor1.com/images/mgl/PKZQL/s1/1997-toyota-supra-sold-for-176-000-at-auction.webp" alt="1">
 <img id="foto2" src="https://acnews.blob.core.windows.net/imgnews/medium/NAZ_03f5887455b84fa4a60a1840b4c16ee0.jpg" alt="2">
<img id="foto3" src="https://img.remediosdigitales.com/f70fc9/fbc9cb45-evasive-motorsports-toyota-supra-2-1568973186/1366_2000.jpg" alt="3">
<img id="foto4" src="https://cdn.motor1.com/images/mgl/2Pn7g/s1/4x3/lanzamiento-toyota-rav4-2021.webp" alt="4">
<img id="foto5" src="https://i.ytimg.com/vi/T_PwPgGe8qc/maxresdefault.jpg" alt="5">

</div>

</div>
</div>
<div id="p1"><p>El GR Supra A91-CF Edition tiene un interior exclusivo que complementa su exterior estilizado y acelera tu corazón. Los asientos deportivos tapizados en Black y Red Alcantara® * le dan un toque deportivo y brindan el apoyo que necesitas para dominar todas las curvas y giros.</p></div>
<div id="p2"><p>El Fortuner cuenta con un motor de 2.700 cc, 4 cilindros en línea, 16 válvulas, DOHC y tecnología DUAL VVT-i, con una potencia de 163Hp y un torque de 245 Nm, que brindan mayor potencia, menor consumo y es más amigable con el medio ambiente. También está disponible la versión con motor de 4.000 cc, 6 cilindros en V, 24 válvulas, DOHC y tecnología VVT-i que entrega una potencia de 235 Hp y un torque de 376 Nm.</p></div>
<div id="p3"><p>El GR Supra A91-CF Edition tiene un interior exclusivo que complementa su exterior estilizado y acelera tu corazón. Los asientos deportivos tapizados en Black y Red Alcantara® * le dan un toque deportivo y brindan el apoyo que necesitas para dominar todas las curvas y giros.</p></div>
<div id="p4"><p>El nuevo RAV va más allá con una versión de 2.5 litros que brinda una impresionante potencia de 203 caballos de fuerza y 250 NM de torque. Introduciendo la nueva tecnología con inteligencia de sincronización de válvulas asistida eléctricamente, VVT-iE, el rendimiento y la eficiencia de combustible logran emisiones más limpias sin comprometer la potencia.</p></div>
<div id="p5"><p>Toyota Land Cruiser Prado posee un Motor de 4000cc, con 277HP y 6 cilindros en V, 24 válvulas y Tecnología DOHC con Dual VVT-i que incrementa la potencia y mejora el consumo de combustible. Con un fuerte carácter y un atractivo y robusto diseño exterior basado en líneas agresivas y estilo compacto de gran elegancia, este potente todo terreno se ha reinventado y superado a sí mismo.</p></div>

</div>

@endsection()

</body>
</html>
