@extends('template.master')

@section('title')
    Excluir Jogador
@endsection

@section('content')
    <div class="alert alert-danger alert-dismissible">
        <h5><i class="icon fas fa-ban"></i> Atenção!</h5>
        @if (count($player->characters) > 0)
            Este(a) jogador(a) possui um ou mais personagens.<br>
            Você não pode excluí-lo(a)!<br><br>
        @else
            Deseja realmente excluir o jogador: <b>{{ $player->name }} </b>?
    </div>

    <!-- formulário de exclusão -->
    <form method="POST" action="{{ route('player.destroy') }}">
        @csrf
        <!-- expira sessão-->
        @method('PUT')
        <!-- habilita PUT como método -->
        <input type="hidden" name="uuid" value="{{ $player->uuid }}">
        <button type="submit" class="btn btn-danger">Confirmar exclusão </button>
    </form>
    @endif
    <a class='btn btn-secundary' href="{{ route('player.list') }}"><i class="fas fa-arrow-circle-left">
        </i> Voltar</a>
@endsection
