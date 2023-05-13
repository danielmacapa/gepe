<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Personagens</title>
</head>

<body>
    <h1>Formulário de Cadastro</h1>
    <form class="form" method="post" action="{{ route('character.store') }}">
        @csrf
        <div class="form_grupo">
            <label class="form_label">UUID</label>
            <input type="text" name="uuid" placeholder="UUID" required><br>
            <label class="form_label">Nome</label>
            <input type="text" name="name" placeholder="Nome" required><br>
            <label class="form_label">Slug</label>
            <input type="text" name="slug" placeholder="Slug" required><br>
            <label class="form_label">Ascendência</label>
            <select name="race_id" required>
                @forelse ($races as $race)
                    <option value="{{ $race->id }}">{{ $race->name }}</option><br>
                @empty
                @endforelse
            </select><br>
            <label class="form_label">Profissão</label>
            <select name="profession_id" required>
                @forelse ($professions as $profession)
                    <option value="{{ $profession->id }}">{{ $profession->name }}</option><br>
                @empty
                @endforelse
            </select><br>
            <label class="form_label">Jogador</label>
            <select name="player_id" required>
                @forelse ($players as $player)
                    <option value="{{ $player->id }}">{{ $player->name }}</option><br>
                @empty
                @endforelse
            </select><br>
            <label class="form_label">Força (2 a 4)</label>
            <input type="number" name="strenght" value="2" min="2" max="4" required><br>
            <label class="form_label">Agilidade (2 a 4)</label>
            <input type="number" name="agility" value="2" min="2" max="4" required><br>
            <label class="form_label">Astúcia (2 a 4)</label>
            <input type="number" name="wits" value="2" min="2" max="4" required><br>
            <label class="form_label">Empatia (2 a 4)</label>
            <input type="number" name="empathy" value="2" min="2" max="4" required><br>

        </div>
        <div class="submit">
            <button type="reset" name="Limpar" class="reset_btn">Limpar</button>
            <input type="hidden" name="action" value="Enviar">
            <button type="submit" name="Enviar" class="submit_btn">Cadastrar</button>
        </div>
        <div class="back">
            <a href="/character/list">Voltar</a>
        </div>
    </form>

</body>

</html>
