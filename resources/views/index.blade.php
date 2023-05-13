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
