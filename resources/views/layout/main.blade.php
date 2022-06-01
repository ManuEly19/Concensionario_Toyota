<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<style>

    @import url('https://fonts.googleapis.com/css2?family=Spline+Sans+Mono:wght@300;400;500;700&display=swap');
    * {
    font-family: 'Spline Sans Mono', monospace;
    }

    footer {
        color: aliceblue;
        position: fixed;
        bottom: 0px;
        width: 100%;
        height: 5%;
    }
</style>


<title>@yield('title')</title>
</head>

<body>
  {{-- {{dd(request())}} --}}

  @include('layout.nav') {{--  Pone la barra de nav  --}}

  <main class="container">
    <div class="bg-light p-5 rounded">
      @yield('content')  {{--  Aqui siempre va estar el contenido dinamico  --}}
    </div>
  </main>

  @include('layout.footer') {{--  Car otra porcion que siempre va estar anclado  --}}

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>
