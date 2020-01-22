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
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/produtos">Estoque Laravel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-md">
        <li class="nav-item active">
          <a class="nav-link" href="{{action('ProdutoController@lista')}}">Listagem</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{action('ProdutoController@novo')}}">Novo</a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container">
    @yield('conteudo')
  </div>
  <footer class="footer">
    <p>Controle de Estoques.</p>
  </footer>
</body>