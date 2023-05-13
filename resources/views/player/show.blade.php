<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes do Jogador</title>
</head>

<body>
    <div class="details">
        <h1>Detalhes</h1>
        Nome: {{ $player->name }}<br>
        Slug: {{ $player->slug }}<br>
        UUID: {{ $player->uuid }}<br>
        E-mail: {{ $player->email }}<br>
        Criado em: {{ $player->created_at }}<br>
        Atualizado em: {{ $player->updated_at }}<br>
    </div>
    <div class="list">
        <h1>Personagens do jogador {{ $player->name }} </h1>
        <table>
            <tr>
                <th>Nome</th>
                <th>uuid</th>
                <th>slug</th>
                <th>Ascendência</th>
                <th>Profissão</th>
            </tr>
            @forelse ($player->characters as $character)
                <tr>
                    <td>{{ $character->name }}</td>
                    <td>{{ $character->uuid }}</td>
                    <td>{{ $character->slug }}</td>
                    <td>{{ $character->race->name }}</td>
                    <td>{{ $character->profession->name }}</td>
                    <!-- As duas views abaixo requerem uuid do registro, conforme rota -->
                    <td><a href="{{ route('character.update', $character->uuid) }}">Editar</a></td>
                    <td><a href="{{ route('character.delete', $character->uuid) }}">Excluir</a></td>

                </tr>
            @empty
                <tr>
                    <td colspan=2>Não encontramos registros.</td>
                </tr>
            @endforelse
        </table>
    </div>
    <div class="back">
        <a href="/player/list">Voltar</a>
    </div>


</body>

</html>
