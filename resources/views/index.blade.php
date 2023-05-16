<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GEPE - Greenciador de Personagens</title>
    <link rel="stylesheet" href="{{ asset('adminlte/css/styleindex.css') }}">
</head>

<body id="body">
    <img src="{{ asset('adminlte/img/fundo.jpg') }}">
    <div id="cabecalho">
        <div id="LC">
            <a id="login" href="/forbidden-lands/html/form-login.php">Login</a>
            <a id="criar" href="{{ route('player.create') }}">Criar Usuario</a>
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
</body>

</html>
