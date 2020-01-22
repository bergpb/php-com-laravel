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
    <h1>Listagem de produtos</h1>
    <table class="table table-striped table-bordered table-hover">
      <?php foreach($produtos as $produto): ?>
      <tr>
        <td><?= $produto->nome ?></td>
        <td><?= $produto->valor ?></td>
        <td><?= $produto->descricao ?></td>
        <td><?= $produto->quantidade ?></td>
        <td>
          <a href="/produtos/mostra/<?= $produto->id ?>">
            <i style="color: blue" class="fa fa-search" aria-hidden="true"></i>
          </a>
        </td>
      </tr>
      <?php endforeach ?>
    </table>
  </div>
</body></html>