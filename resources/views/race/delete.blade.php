<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Excluir Ascendência</title>
</head>

<body>

    @if (count($race->characters) > 0)
        Um ou mais personagens possuem esta ascendência.<br>
        Você não pode excluí-la!<br><br>
    @else
        Deseja realmente excluir a ascendência: {{ $race->name }} ?<br><br>

        <form method="POST" action="{{ route('race.destroy') }}">
            @csrf
            <!-- expira sessão-->
            @method('PUT')
            <!-- habilita PUT como método -->
            <input type="hidden" name="uuid" value="{{ $race->uuid }}">
            <button type="submit">Confirmar exclusão</button>
        </form>
    @endif
    <div class="back">
        <a href="/race/list">Voltar</a>
    </div>


</body>

</html>
