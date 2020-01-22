@extends('layout.principal')

@section('conteudo')
<h1>Novo Produto</h1>

<form action="/produtos/adiciona" method="post">
  @csrf
  <div class="form-group">
    <label>Nome</label>
    <input name="nome" class="form-control" type="text"/>
  </div>
  <div class="form-group">
    <label>Descrição</label>
    <input name="descricao" class="form-control" type="text"/>
  </div>
  <div class="form-group">
    <label>Valor</label>
    <input name="valor" type="number" class="form-control" type="text"/>
  </div>
  <div class="form-group">
    <label>Quantidade</label>
    <input name="quantidade" type="number" class="form-control" type="number">
  </div>
    <button class="btn btn-primary btn-block" type="submit">Submit</button>
  </div>
</form>
@endsection