<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes da Profissão</title>
</head>

<body>
    <div class="details">
        <h1>Detalhes</h1>
        Nome: {{ $profession->name }}<br>
        Slug: {{ $profession->slug }}<br>
        UUID: {{ $profession->uuid }}<br>
        Descrição: {{ $profession->description }}<br>
        Talento: {{ $profession->talent_name }}<br>
        Descrição: {{ $profession->talent_description }}<br>
        Equipamento: {{ $profession->equipment }}<br>
        Criado em: {{ $profession->created_at }}<br>
        Atualizado em: {{ $profession->updated_at }}<br>
    </div>
    <div class="list">
        <h1>Personagens com a profissão {{ $profession->name }} </h1>
        <table>
            <tr>
                <th>Nome</th>
                <th>slug</th>
                <th>uuid</th>
                <th>Ascendência</th>
                <th>Jogador</th>
            </tr>
            @forelse ($profession->characters as $character)
                <tr>
                    <td>{{ $character->name }}</td>
                    <td>{{ $character->slug }}</td>
                    <td>{{ $character->uuid }}</td>
                    <td>{{ $character->race->name }}</td>
                    <td>{{ $character->player->name }}</td>
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
        <a href="/profession/list">Voltar</a>
    </div>


</body>

</html>
