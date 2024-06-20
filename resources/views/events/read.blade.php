@extends('layouts.main')

@section('title', 'Read')

@section('conteudo')

<h1 style="text-align: center">Dados</h1>

@if(count($tabelas) != 0)

    @foreach ($tabelas as $tabela)
        <br>
        <a href="/events/{{$tabela->id}}">{{$tabela->Nome}}</a>
        <br>
    @endforeach

@else
    <h2>Nao ha dados</h2>
@endif
    
@endsection