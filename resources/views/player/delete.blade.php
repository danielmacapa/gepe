<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Excluir Jogador(a)</title>
</head>

<body>

    @if (count($player->characters) > 0)
        Este(a) jogador(a) possui um ou mais personagens.<br>
        Você não pode excluí-lo(a)!<br><br>
    @else
        Deseja realmente excluir o(a) jogador(a): {{ $player->name }} ?<br><br>

        <form method="POST" action="{{ route('player.destroy') }}">
            @csrf
            <!-- expira sessão-->
            @method('PUT')
            <!-- habilita PUT como método -->
            <input type="hidden" name="uuid" value="{{ $player->uuid }}">
            <button type="submit">Confirmar exclusão</button>
        </form>
    @endif
    <div class="back">
        <a href="/player/list">Voltar</a>
    </div>


</body>

</html>
