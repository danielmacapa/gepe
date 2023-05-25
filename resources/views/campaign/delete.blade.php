@extends('template.master')

@section('title')
    Excluir Campanha
@endsection

@section('content')
    <div class="alert alert-danger alert-dismissible">
        <h5><i class="icon fas fa-ban"></i> Atenção!</h5>
        @if (count($campaign->character) > 0)
            Esta campanha possui um ou mais personagens.<br>
            Você não pode excluí-la!<br><br>
        @else
            Deseja realmente excluir a campanha: <b>{{ $campaign->name }} </b>?
    </div>

    <!-- formulário de exclusão -->
    <form method="POST" action="{{ route('campaign.destroy') }}">
        @csrf
        <!-- expira sessão-->
        @method('PUT')
        <!-- habilita PUT como método -->
        <input type="hidden" name="uuid" value="{{ $campaign->uuid }}">
        <button type="submit" class="btn btn-danger">Confirmar exclusão </button>
    </form>
    @endif
    <a class='btn btn-secundary' href="{{ route('campaign.list') }}"><i class="fas fa-arrow-circle-left">
        </i> Voltar</a>
@endsection
