@extends('template.master')

@section('content')
<div class="card card-primary">
    <!-- Título -->
    <div class="card-header">
        <h3 class="card-title">Excluir Personagem</h3>
    </div>
    <!-- Conteúdo -->
    <div class="row">
        <div class="card-body">
            <h5><i class="icon fas fa-ban"></i> Atenção!</h5>
            Deseja realmente excluir o personagem: <b>{{ $character->name }} </b>?
        <form method="POST" action="{{ route('manager.character.destroy') }}">
        @csrf <!-- expira sessão-->
        </div>
    </div>
    <!-- Botões -->
</div>
<div class="card-footer">
    <input type="hidden" name="uuid" value="{{ $character->uuid }}">
    <button type="submit" class="btn btn-danger m-0">   Excluir   </button>
    <a class='btn btn-secondary m-1' href="{{ route('manager.character.list') }}"><i
            class="fas fa-arrow-circle-left">
        </i> Voltar</a>
    @method('PUT') <!-- habilita PUT como método -->
    </form>
</div>

@endsection
