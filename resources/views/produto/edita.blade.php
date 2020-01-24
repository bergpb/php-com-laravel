@extends('layout.principal')

@section('conteudo')
<h1>Edita Produto</h1>

@if(count($errors) > 0)
<div class="alert alert-danger"><ul>
    @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<form action="{{ route('atualizar', $produto->id) }}" method="POST">
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
    <label>Valor</label>
    <input name="valor" type="number" class="form-control" value="{{ old('valor', $produto->valor) }}" type="text"/>
  </div>
  <div class="form-group">
    <label>Quantidade</label>
    <input name="quantidade" type="number" class="form-control" value="{{ $produto->quantidade }}" type="number">
  </div>
    <button class="btn btn-primary btn-block" type="submit">Atualizar</button>
  </div>
</form>
@endsection