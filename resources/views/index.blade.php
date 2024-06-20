@extends('layouts.main')

@section('title', 'Home')

@section('conteudo')

    <div id="search-container" class="col1-md-12">
        <h1>Busque um usuario</h1>
        <form action="/" method="GET">
            @csrf
            <input type="text" name="search" id="search" class="form-control" placeholder="Procurar...">
            <br>
        </form>

        @if($search)

            @if($users != null)
                <p>{{$users->Nome}}</p>
                @foreach ($users->jogos as $jogo)
                    <br>
                    <li>
                        {{$jogo}}
                    </li>
                    <br>
                @endforeach
            @else
                <h2>Resultado nao encontrado</h2>
            @endif

        @endif

    </div>
    
@endsection