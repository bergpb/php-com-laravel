@extends('layout.base')

@section('head')
Editar
@endsection

@section('title')
Editando Produto
@endsection

@section('content')
@include('errors', ['errors' => $errors])
<form action="{{ route('update', $produto->id) }}" method="POST">
  @csrf
  @method('PUT')
  <div class="form-group">
    <label>Nome</label>
    <input name="nome" class="form-control" value="{{ old('nome', $produto->nome) }}" type="text"/>
  </div>
  <div class="form-group">
    <label>Descrição</label>
    <input name="descricao" class="form-control" value="{{ old('descricao', $produto->descricao) }}" type="text"/>
  </div>
  <div class="form-group">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-12">
        <label>Valor</label>
        <input name="valor" type="number" class="form-control" value="{{ old('valor', $produto->valor) }}" type="text"/>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12">
        <label>Quantidade</label>
        <input name="quantidade" type="number" class="form-control" value="{{ $produto->quantidade }}" type="number">
      </div>
    </div>
  </div>
  <div class="row">
    <div class="offset-md-2 offset-lg-2 col-sm-12 col-md-4 col-lg-4 mt-2">
      <button class="btn btn-success btn-block" type="submit">Atualizar</button>
    </div>
    <div class="col-sm-12 col-md-4 col-lg-4 mt-2">
      <a href="{{ route('list') }}" class="btn btn-primary btn-block">Voltar</a>
    </div>
  </div>
</form>
@endsection