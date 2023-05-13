<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes da Ascendência</title>
</head>

<body>
    <div class="details">
        <h1>Detalhes</h1>
        Nome: {{ $race->name }}<br>
        Slug: {{ $race->slug }}<br>
        UUID: {{ $race->uuid }}<br>
        Descrição: {{ $race->description }}<br>
        Talento: {{ $race->talent_name }}<br>
        Descrição: {{ $race->talent_description }}<br>
        Criado em: {{ $race->created_at }}<br>
        Atualizado em: {{ $race->updated_at }}<br>
    </div>
    <div class="list">
        <h1>Personagens da ascendência {{ $race->name }} </h1>
        <table>
            <tr>
                <th>Nome</th>
                <th>slug</th>
                <th>uuid</th>
                <th>Profissão</th>
                <th>Jogador</th>
            </tr>
            @forelse ($race->characters as $character)
                <tr>
                    <td>{{ $character->name }}</td>
                    <td>{{ $character->slug }}</td>
                    <td>{{ $character->uuid }}</td>
                    <td>{{ $character->profession->name }}</td>
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
        <a href="/race/list">Voltar</a>
    </div>

</body>

</html>
