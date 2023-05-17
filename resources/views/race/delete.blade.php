@extends('template.master')

@section('title')
    Excluir Ascendência
@endsection

@section('content')
    <div class="alert alert-danger alert-dismissible">
        <h5><i class="icon fas fa-ban"></i> Atenção!</h5>
        @if (count($race->characters) > 0)
            Esta ascendência possui um ou mais personagens.<br>
            Você não pode excluí-la!<br><br>
        @else
            Deseja realmente excluir a ascendência: <b>{{ $race->name }} </b>?
    </div>

    <!-- formulário de exclusão -->
    <form method="POST" action="{{ route('race.destroy') }}">
        @csrf
        <!-- expira sessão-->
        @method('PUT')
        <!-- habilita PUT como método -->
        <input type="hidden" name="uuid" value="{{ $race->uuid }}">
        <button type="submit" class="btn btn-danger">Confirmar exclusão </button>
    </form>
    @endif
    <a class='btn btn-secundary' href="/race/list"><i class="fas fa-arrow-circle-left">
        </i> Voltar</a>
@endsection
