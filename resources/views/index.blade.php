@extends('layout.base')

@section('head')
Início
@endsection

@section('content')
<div class="jumbotron mt-4">
  <h1 class="display-4">Produtos</h1>
  <p class="lead">Controle de produtos com PHP e Laravel.</p>
  <hr class="my-4">
  <a class="btn btn-primary" href="{{ route('list') }}" role="button">Listagem</a>
</div>
@endsection