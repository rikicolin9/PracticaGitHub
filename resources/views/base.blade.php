<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="StyleSheet" href="customes.css" type="text/css">
    <title>PRACTICA GIT HUB</title>
    <style>
      .nav{
        background-color:rgb(243, 216, 176);
      }
    
    </style>
</head>
<body>

<nav>
  <ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link {{request()->routeIs('registro')? 'text-danger fw-bold':''}}" href="{{route('registro')}}">Registrar Recordatorios</a>
    </li>
    <li class="nav-item">
      <a class="nav-link {{request()->routeIs('recordatorio')? 'text-success fw-bold':''}}" href="{{route('recordatorio')}}">Consultar Recordatorio</a>
    </li>
  </ul>
</nav>
@yield('contenido')

<div class="alert alert-warning text-center" role="alert">
  Ricardo Colin Maldonado CopyRight©
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>