<html>
@extends('template.master')

@section('title')
    Excluir Personagem
@endsection

@section('content')
    <div class="alert alert-danger alert-dismissible">
        <h5><i class="icon fas fa-ban"></i> Atenção!</h5>
        Deseja realmente excluir o personagem: <b>{{ $character->name }} </b>?
    </div>

    <!-- formulário de exclusão -->
    <form method="POST" action="{{ route('character.destroy') }}">
        @csrf
        <!-- expira sessão-->
        @method('PUT')
        <!-- habilita PUT como método -->
        <input type="hidden" name="uuid" value="{{ $character->uuid }}">
        <button type="submit" class="btn btn-danger">Confirmar exclusão </button>
    </form>
@endsection

</html>
