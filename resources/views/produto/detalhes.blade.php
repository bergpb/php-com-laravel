@extends('layout.principal')

@section('conteudo')
<h1>Detalhes do produto: <?= $produto->nome ?></h1>

<ul>
  <li><strong>Valor: </strong><?= $produto->nome ?></li>
  <li><strong>Descrição: </strong><?= $produto->descricao ?></li>
  <li><strong>Quantidade estoque: </strong><?= $produto->quantidade ?></li>
</ul>
@endsection
