@extends('template.inicio')

@section('content')
    <div class='container-fluid'>
        <div id="cabecalho">
            <div id="LC">
                <a id="login" href="{{ route('login') }}">Login</a>
                <a id="criar" href="{{ route('register') }}">Criar Usuario</a>
            </div>
            <div id="logotitulo">
                <img src="{{ asset('adminlte/img/gepeLogo.png') }}">
                <h1>GEPE</h1>
                <p>Gerador de Personagens</p>
            </div>
        </div>
        <div class="botoes">
            <a href="{{ route('character.create') }}"><button id="bt1">Criar Ficha</button></a>
            <a href="{{ route('character.list') }}"><button id="bt2">Acessar Ficha</button></a>
        </div>
    </div>
@endsection
