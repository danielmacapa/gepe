@extends('template.master')

@section('title')
    Excluir Profissão
@endsection

@section('content')
    <div class="alert alert-danger alert-dismissible">
        <h5><i class="icon fas fa-ban"></i> Atenção!</h5>
        @if (count($profession->characters) > 0)
            Esta profissão possui um ou mais personagens.<br>
            Você não pode excluí-la!<br><br>
        @else
            Deseja realmente excluir a profissão: <b>{{ $profession->name }} </b>?
    </div>

    <!-- formulário de exclusão -->
    <form method="POST" action="{{ route('profession.destroy') }}">
        @csrf
        <!-- expira sessão-->
        @method('PUT')
        <!-- habilita PUT como método -->
        <input type="hidden" name="uuid" value="{{ $profession->uuid }}">
        <button type="submit" class="btn btn-danger">Confirmar exclusão </button>
    </form>
    @endif
    <a class='btn btn-secundary' href="{{ route('profession.list') }}"><i class="fas fa-arrow-circle-left">
        </i> Voltar</a>
@endsection
