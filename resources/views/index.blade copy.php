<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FLCharGen</title>
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.min.css') }}">
</head>

<body id="body">
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

<!-- Blade
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>

<body>
    <h1>GEPE - Gerenciador de Fichas de Personagem</h1>
    <table>
        <tr>
            <td><a href="{{ route('character.list') }}">Lista de Personagens</a></td>
        </tr>
        <tr>
            <td><a href="{{ route('race.list') }}">Lista de Ascendências</a></td>
        </tr>
        <tr>
            <td><a href="{{ route('profession.list') }}">Lista de Profissões</a></td>
        </tr>
        <tr>
            <td><a href="{{ route('player.list') }}">Lista de Jogadores</a></td>
        </tr>
    </table>
</body>

</html>
FIM Blade -->
