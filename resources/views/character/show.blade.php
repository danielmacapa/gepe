<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes do Personagem</title>
</head>

<body>
    <div class="details">
        <h1>Detalhes</h1>
        Nome: {{ $character->name }}<br>
        UUID: {{ $character->uuid }}<br>
        Slug: {{ $character->slug }}<br>
        Força{{ $character->strenght }}<br>
        Agilidade{{ $character->agility }}<br>
        Astúcia{{ $character->wits }}<br>
        Empatia{{ $character->empathy }}<br>
        Ascendência: {{ $character->race->name }}<br>
        Profissão: {{ $character->profession->name }}<br>
        Equipamento: {{ $character->profession->equipment }}<br>
        Jogador: {{ $character->player->name }}<br>
        Criado em: {{ $character->created_at }}<br>
        Atualizado em: {{ $character->updated_at }}<br>
    </div>
    <div class="list">
        <h1>Personagens com a ascendência {{ $character->race->name }} </h1>
        <table>
            <tr>
                <th>Nome</th>
                <th>Profissão</th>
                <th>Jogador</th>
            </tr>
            @forelse ($character->race->characters as $character)
                <tr>
                    <td>{{ $character->name }}</td>
                    <td>{{ $character->profession->name }}</td>
                    <td>{{ $character->player->name }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan=2>Não encontramos registros.</td>
                </tr>
            @endforelse
        </table>
    </div>
    <div class="back">
        <a href="/character/list">Voltar</a>
    </div>

</body>

</html>
