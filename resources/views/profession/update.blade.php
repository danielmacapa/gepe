<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Alteração de Profissão</title>
</head>

<body>
    <h1>Formulário de Alteração</h1>
    <form class="form" method="post" action="{{ route('profession.put') }}">
        @csrf
        <!-- expira sessão-->
        @method('PUT')
        <!-- habilita PUT como método -->
        <div class="form_grupo">
            <input type="hidden" name="uuid" value="{{ $profession->uuid }}">
            <label class="form_label">Nome</label>
            <input type="text" name="name" value="{{ $profession->name }}"><br>
            <label class="form_label">Slug</label>
            <input type="text" name="slug" value="{{ $profession->slug }}"><br>
            <label class="form_label">Descrição</label>
            <input type="text" name="description" value="{{ $profession->description }}"><br>
            <label class="form_label">Talento</label>
            <input type="text" name="talent_name" value="{{ $profession->talent_name }}"><br>
            <label class="form_label">Descrição do talento</label>
            <input type="text" name="talent_description" value="{{ $profession->talent_description }}"><br>
            <label class="form_label">Equipamento</label>
            <input type="text" name="equipment" value="{{ $profession->talent_description }}"><br>
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
