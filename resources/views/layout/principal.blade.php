<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="/css/app.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
          crossorigin="anonymous">
  <title>Controle de Estoque</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light mb-2 d-flex justify-content-between">
      <a class="navbar navbar-expand-lg" href="{{ route('listar') }}">Home</a>
      @auth
        <a href="/sair" class="text-danger">Sair</a>
      @endauth

      @guest
        <a href="/entrar" class="text-danger">Entrar</a>
      @endguest
  </nav>
  <div class="container">
      <h1>@yield('cabecalho')</h1>
      @yield('conteudo')
  </div>
  <footer class="footer text-center is-hidden-mobile">
    <span>Controle de Estoques feito em Laravel</span>
  </footer>
</body>