@extends('layout.principal')

@section('conteudo')
<h1>Novo Produto</h1>

@if(count($errors) > 0)
<div class="alert alert-danger"><ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<form action="/produtos/adiciona" method="post">
  @csrf
  <div class="form-group">
    <label>Nome</label>
    <input name="nome" class="form-control" value="{{ old('nome') }}" type="text"/>
  </div>
  <div class="form-group">
    <label>Descrição</label>
    <input name="descricao" class="form-control" value="{{ old('descricao') }}" type="text"/>
  </div>
  <div class="form-group">
    <label>Valor</label>
    <input name="valor" type="number" class="form-control" value="{{ old('valor') }}" type="text"/>
  </div>
  <div class="form-group">
    <label>Quantidade</label>
    <input name="quantidade" type="number" class="form-control" value="{{ old('quantidade') }}" type="number">
  </div>
    <button class="btn btn-primary btn-block" type="submit">Adicionar</button>
  </div>
</form>
@endsection