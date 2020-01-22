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
  <div class="container">
    <h1>Detalhes do produto: <?= $produto->nome ?></h1>

    <ul>
      <li><strong>Valor: </strong><?= $produto->nome ?></li>
      <li><strong>Descrição: </strong><?= $produto->descricao ?></li>
      <li><strong>Quantidade estoque: </strong><?= $produto->quantidade ?></li>
    </ul>
  </div>
</body>
</html>