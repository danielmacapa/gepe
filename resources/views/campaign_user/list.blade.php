@extends('template.master')

@section('title')
    Lista de Personagens
@endsection

@section('novo')
    <a class='btn btn-primary btn-sm' href="{{ route('campaign_user.create') }}"><i class='fa fa-plus'></i> Cadastrar Novo
    </a>
@endsection

@section('content')
    <div class='container-fluid'>
        <div class="card">
            <table class="table table-lg">
                <tr class="table-primary">
                    <th>Jogador</th>
                    <th colspan="4">Campanha</th>
                </tr>
                @forelse ($users as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan=8>Não encontramos registros.</td>
                    </tr>
                @endforelse
                @forelse ($campaigns as $campaign)
                    <tr>
                        <td>{{ $campaign->name }}</td>
                        <!-- As três views abaixo requerem uuid do registro, conforme rota -->
                        <td><a href="{{ route('campaign.show', $campaign->uuid) }}"><i class='fa fa-eye'
                                    title="Detalhes"></i></a></td>
                        <td><a href="{{ route('campaign.update', $campaign->uuid) }}"><i class='fa fa-edit'
                                    title="Editar"></i></a></td>
                        <td><a href="{{ route('campaign.delete', $campaign->uuid) }}"><i class='fa fa-trash'
                                    title="Excluir"></i></a></td>
                    </tr>
                @empty
                    <tr>
                        <td colspan=8>Não encontramos registros.</td>
                    </tr>
                @endforelse

            </table>
            <p><a class='btn btn-primary btn-sm' href="javascript:history.back()"><i class="fas fa-arrow-circle-left">
                    </i> Voltar</a></p>
        </div>
    </div>
@endsection
