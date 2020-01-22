@extends('layout.principal')

@section('conteudo')
<h1>Listagem de produtos</h1>
@if(empty($produtos))
  <div class="alert alert-danger">
    Você não tem nenhum produto cadastrado.
  </div>
@else
  <table class="table table-striped table-bordered table-hover">
    @foreach($produtos as $produto)
    <tr class="{{ $produto->quantidade<=1 ? 'table-danger' : ''}}">
      <td>{{ $produto->nome }}</td>
      <td>{{ $produto->valor }}</td>
      <td>{{ $produto->descricao }}</td>
      <td>{{ $produto->quantidade }}</td>
      <td>
        <a href="/produtos/mostra/<?= $produto->id ?>">
          <i style="color: blue" class="fa fa-search" aria-hidden="true"></i>
        </a>
      </td>
    </tr>
    @endforeach
  </table>
@endif
<span class="badge badge-danger pull-right">
  Um ou menos itens no estoque!!!
</span>
@endsection