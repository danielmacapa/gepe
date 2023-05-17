<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alteração de Personagens</title>
</head>

<body>
    <h1>Formulário de Alteração</h1>
    <form class="form" method="post" action="{{ route('character.put') }}">
        @csrf
        <!-- expira sessão-->
        @method('PUT')
        <!-- habilita PUT como método -->
        <div class="form_grupo">
            <input type="hidden" name="uuid" value="{{ $character->uuid }}">
            <label class="form_label">Nome</label>
            <input type="text" name="name" value="{{ $character->name }}"><br>
            <label class="form_label">Slug</label>
            <input type="text" name="slug" value="{{ $character->slug }}"><br>
            <label class="form_label">Ascendência</label>
            <select name="race_id" required>
                @forelse ($races as $race)
                    <option value="{{ $race->id }}" @if ($race->id == $character->race_id) selected @endif>
                        {{ $race->name }}
                    </option><br>
                @empty
                @endforelse
            </select><br>
            <label class="form_label">Profissão</label>
            <select name="profession_id" required>
                @forelse ($professions as $profession)
                    <option value="{{ $profession->id }}" @if ($profession->id == $character->profession_id) selected @endif>
                        {{ $profession->name }}
                    </option><br>
                @empty
                @endforelse
            </select><br>
            <label class="form_label">Jogador</label>
            <select name="player_id" required>
                @forelse ($players as $player)
                    <option value="{{ $player->id }}" @if ($player->id == $character->player_id) selected @endif>
                        {{ $player->name }}
                    </option><br>
                @empty
                @endforelse
            </select><br>
            <label class="form_label">Força</label>
            <input type="number" name="strenght" value="{{ $character->strenght }}" min="2" max="4"><br>
            <label class="form_label">Agilidade</label>
            <input type="number" name="agility" value="{{ $character->agility }}" min="2" max="4"><br>
            <label class="form_label">Astúcia</label>
            <input type="number" name="wits" value="{{ $character->wits }}" min="2" max="4"><br>
            <label class="form_label">Empatia</label>
            <input type="number" name="empathy" value="{{ $character->empathy }}" min="2" max="4"><br>
        </div>
        <div class="submit">
            <input type="hidden" name="action" value="Enviar">
            <button type="submit" name="Enviar" class="submit_btn">Atualizar</button>
        </div>
        <div class="back">
            <a href="/profession/list">Voltar</a>
        </div>

    </form>

</body>

</html>
