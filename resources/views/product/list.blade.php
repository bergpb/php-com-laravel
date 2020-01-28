@extends('layout.base')

@section('head')
Listagem
@endsection

@section('title')
Listagem de Produtos
@endsection

@section('content')
@if(count($produtos) == 0)
  <div class="alert alert-danger">
    Você não tem nenhum produto cadastrado.
  </div>
@else
  <table class="table table-striped table-bordered table-hover table-sm">
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
    @foreach($produtos as $p)
    <tr class="{{ $p->quantidade<=1 ? 'table-danger' : ''}}">
      <td class="text-center">{{ $loop->iteration }}</td>
      <td>{{ $p->nome }}</td>
      <td>{{ $p->valor }}</td>
      <td>{{ $p->descricao }}</td>
      <td>{{ $p->quantidade }}</td>
      @auth
        <td class="text-center">
          <a class="btn btn-success btn-sm" href="{{ route('show', $p->id) }}">
            <i class="fa fa-search" aria-hidden="true"></i>
          </a>
        </td>
        <td class="text-center">
          <a class="btn btn-info btn-sm" href="{{ route('edit', $p->id) }}">
            <i style="color: white" class="fa fa-pencil-square-o" aria-hidden="true"></i>
          </a>
        </td>
        <td class="text-center">
          <a class="btn btn-danger btn-sm" href="{{ route('remove', $p->id) }}"> 
            <i class="fa fa-trash" aria-hidden="true"></i>
          </a>
        </td>
      @endauth
    </tr>
    @endforeach
  </table>
@endif
@auth
<a href="{{ route('new') }}" class="btn btn-success mt-2">Cadastrar novo produto</a>
@endauth
@endsection