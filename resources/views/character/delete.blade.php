<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Excluir Personagem</title>
</head>

<body>
    Deseja realmente excluir o personagem: {{ $character->name }} ?<br><br>

    <form method="POST" action="{{ route('character.destroy') }}">
        @csrf
        <!-- expira sessão-->
        @method('PUT')
        <!-- habilita PUT como método -->
        <input type="hidden" name="uuid" value="{{ $character->uuid }}">
        <button type="submit">Confirmar exclusão</button>
    </form>

</body>

</html>
