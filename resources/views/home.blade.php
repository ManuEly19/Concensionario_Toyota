@extends('layout.main')

@section('title','Inicio')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenidos</h1>
    <hr>

    <a>
        <img src="https://www.toyota.com.ec/sites/default/files/styles/imagenes_slide_home/public/slides/BANNER-WEB.jpg?itok=MGHt9akZ" alt="" title="">
    </a>

    <div><br></div>

    <div style=" display: flex;">
        <div>
            <iframe width="380" height="265" src="https://www.youtube.com/embed/3Jk0z5Cg3dE" ></iframe>
        </div>
        <div>&nbsp &nbsp &nbsp</div>
        <div>
            <iframe width="380" height="265" src="https://www.youtube.com/embed/LMlPOGHRWjM" ></iframe>
        </div>
        <div>&nbsp &nbsp &nbsp</div>
        <div>
            <iframe width="367" height="265" src="https://www.youtube.com/embed/nw6r7AMyhaE" ></iframe>
        </div>
    </div>
</body>
</html>



@endsection()
