@extends('layouts.main')

@section('title', 'Create')

@section('conteudo')

    <h1 style="text-align: center">Criando</h1>

    <form action="/events" method="post">
        @csrf

        <label for="">
            Nome
        </label>
        <br>
        <input type="text" name="Nome" id="Nome">
        <br>
        <label for="">
            Senha
        </label>
        <br>
        <input type="text" name="Senha" id="Senha">
        <br>
        <label for="">
            Jogos
        </label>
        <br>
        <input type="checkbox" name="jogos[]" id="" value="Valorant"> Valorante
        <br>
        <input type="checkbox" name="jogos[]" id="" value="Lol"> Lol
        <br>
        <input type="checkbox" name="jogos[]" id="" value="Fortnite"> Fortnite
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    
@endsection