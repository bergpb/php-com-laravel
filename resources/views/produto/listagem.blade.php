@extends('layout.principal')

@section('conteudo')
<h1>Listagem de produtos</h1>
@if(count($produtos) == 0)
  <div class="alert alert-danger">
    Você não tem nenhum produto cadastrado.
  </div>
@else
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th class="text-center" scope="col">#</th>
        <th class="text-center" scope="col">Nome</th>
        <th class="text-center" scope="col">Valor</th>
        <th class="text-center" scope="col">Descrição</th>
        <th class="text-center" scope="col">Quantidade</th>
        @auth
          <th class="text-center" scope="col" colspan="3">Ações</th>
        @endauth
      </tr>
    </thead>
    @foreach($produtos as $produto)
    <tr class="{{ $produto->quantidade<=1 ? 'table-danger' : ''}}">
      <td>{{ $loop->iteration }}</td>
      <td>{{ $produto->nome }}</td>
      <td>{{ $produto->valor }}</td>
      <td>{{ $produto->descricao }}</td>
      <td>{{ $produto->quantidade }}</td>
      @auth
        <td class="text-center">
          <a class="btn btn-success btn-sm" href="{{ route('exibir', $produto->id) }}">
            <i class="fa fa-search" aria-hidden="true"></i>
          </a>
        </td>
        <td class="text-center">
          <a class="btn btn-info btn-sm" href="{{ route('editar', $produto->id) }}">
            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
          </a>
        </td>
        <td class="text-center">
          <a class="btn btn-danger btn-sm" href="{{ route('remover', $produto->id) }}"> 
            <i class="fa fa-trash" aria-hidden="true"></i>
          </a>
        </td>
      @endauth
    </tr>
    @endforeach
  </table>
@endif

@auth
<a href="{{ route('cadastrar') }}" class="btn btn-success btn-sm">Cadastrar</a>
@endauth

@if(old('name'))
  <div class="alert alert-success">
    <strong>Sucesso! </strong>Produto {{ old('nome') }} adicionado com sucesso.
  </div>
@endif
@endsection