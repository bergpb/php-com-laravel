@extends('layout.base')

@section('head')
Novo Produto
@endsection

@section('title')
Novo Produto
@endsection

@section('content')
@include('errors', ['errors' => $errors])
<form action="/produtos/adiciona" method="post">
  @csrf
  <div class="form-group">
    <label>Nome</label>
    <input name="nome" class="form-control" placeholder="Nome" value="{{ old('nome') }}" type="text"/>
  </div>
  <div class="form-group">
    <label>Descrição</label>
    <input name="descricao" class="form-control" placeholder="Descrição" value="{{ old('descricao') }}" type="text"/>
  </div>
  <div class="form-group">
    <label>Valor</label>
    <input name="valor" type="number" class="form-control" placeholder="Valor" value="{{ old('valor') }}" type="text"/>
  </div>
  <div class="form-group">
    <label>Quantidade</label>
    <input name="quantidade" type="number" class="form-control" placeholder="Quantidade" value="{{ old('quantidade') }}" type="number">
  </div>
  <div class="row">
    <div class="offset-md-4 offset-lg-4 col-sm-12 col-md-4 col-lg-4">
      <button class="btn btn-primary btn-block mt-2" type="submit">Adicionar</button>
    </div>
  </div>
</form>
@endsection