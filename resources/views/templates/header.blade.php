<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel Reto</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" >
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet" >

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>


</head>
<body>
  <header class="container d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
      <img src="https://www.eventyas.com/img/eventyas/logo.png" alt="Codigo" height="32" class="bi me-2">
    </a>

    <ul class="nav nav-pills">
      <li class="nav-item"><a href="/" class="nav-link" aria-current="page">Inicio</a></li>
      <li class="nav-item"><a href="{{ route('nosotros') }}" class="nav-link" aria-current="page">Quienes somos</a></li>
    </ul>
  </header>
 
  <main class="container">