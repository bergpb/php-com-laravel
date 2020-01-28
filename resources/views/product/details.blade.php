@extends('layout.base')

@section('head')
Detalhes
@endsection

@section('title')
Datalhe produto: {{ $produto->nome }}
@endsection

@section('content')
<p><strong>Valor: </strong>{{ $produto->nome }}</p>
<p><strong>Descrição: </strong>{{ $produto->descricao }}</p>
<p><strong>Quantidade estoque: </strong> {{ $produto->quantidade }} </p>
<a style="color: white" class="btn btn-info" href="{{ route('list') }}">Voltar</a>
@endsection
