<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alteração de Jogador</title>
</head>

<body>
    <h1>Formulário de Alteração</h1>
    <form class="form" method="post" action="{{ route('player.put') }}">
        @csrf
        <!-- expira sessão-->
        @method('PUT')
        <!-- habilita PUT como método -->
        <div class="form_grupo">
            <input type="hidden" name="uuid" value="{{ $player->uuid }}">
            <label class="form_label">Nome</label>
            <input type="text" name="name" value="{{ $player->name }}"><br>
            <label class="form_label">Slug</label>
            <input type="text" name="slug" value="{{ $player->slug }}"><br>
            <label class="form_label">Descrição</label>
            <input type="text" name="email" value="{{ $player->email }}"><br>
            <label class="form_label">Senha</label>
            <input type="text" name="password" value="{{ $player->password }}"><br>
        </div>
        <div class="submit">
            <input type="hidden" name="action" value="Enviar">
            <button type="submit" name="Enviar" class="submit_btn">Atualizar</button>
        </div>
        <div class="back">
            <a href="/player/list">Voltar</a>
        </div>

    </form>

</body>

</html>
