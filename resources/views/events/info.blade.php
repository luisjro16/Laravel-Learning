@extends('layouts.main')

@section('title', 'Home')

@section('conteudo')

   <h1>{{$user->Senha}}</h1>
   @if($user->jogos)
        <ul>
            @foreach ($user->jogos as $jogo)
                <li>{{$jogo}}</li>
            @endforeach
        </ul>
    @endif
    
@endsection