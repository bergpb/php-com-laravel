<html>
  <head>
    <link href="/css/app.css" rel="stylesheet">
    <title>Controle de estoque</title>
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
      </tr>
      <?php endforeach ?>
    </table>
  </div>
</body></html>