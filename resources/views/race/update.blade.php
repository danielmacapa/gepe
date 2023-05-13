<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alteração de Ascendência</title>
</head>

<body>
    <h1>Formulário de Alteração</h1>
    <form class="form" method="post" action="{{ route('race.put') }}">
        @csrf
        <!-- expira sessão-->
        @method('PUT')
        <!-- habilita PUT como método -->
        <div class="form_grupo">
            <input type="hidden" name="uuid" value="{{ $race->uuid }}">
            <label class="form_label">Nome</label>
            <input type="text" name="name" value="{{ $race->name }}"><br>
            <label class="form_label">Slug</label>
            <input type="text" name="slug" value="{{ $race->slug }}"><br>
            <label class="form_label">Descrição</label>
            <input type="text" name="description" value="{{ $race->description }}"><br>
            <label class="form_label">Talento</label>
            <input type="text" name="talent_name" value="{{ $race->talent_name }}"><br>
            <label class="form_label">Descrição do talento</label>
            <input type="text" name="talent_description" value="{{ $race->talent_description }}"><br>
        </div>
        <div class="submit">
            <input type="hidden" name="action" value="Enviar">
            <button type="submit" name="Enviar" class="submit_btn">Atualizar</button>
        </div>
        <div class="back">
            <a href="/race/list">Voltar</a>
        </div>

    </form>

</body>

</html>
