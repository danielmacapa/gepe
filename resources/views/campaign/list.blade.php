@extends('template.master')

@section('title')
    Lista de Campanhas
@endsection

@section('novo')
    <a class='btn btn-primary btn-sm' href="{{ route('campaign.create') }}"><i class='fa fa-plus'></i> Cadastrar Nova
    </a>
@endsection

@section('content')
    <div class='container-fluid'>
        <div class="card">
            <table class="table table-lg">
                <tr class="table-primary">
                    <th>Nome</th>
                    <th colspan="4">Descrição</th>
                </tr>

                @forelse ($campaigns as $campaign)
                    <tr>
                        <td>{{ $campaign->name }}</td>
                        <td>{{ $campaign->description }}</td>
                        <!-- As três views abaixo requerem uuid do registro, conforme rota -->
                        <td><a href="{{ route('campaign.show', $campaign->uuid) }}"><i class='fa fa-eye'
                                    title="Detalhes"></i></a>
                        </td>
                        <td><a href="{{ route('campaign.update', $campaign->uuid) }}"><i class='fa fa-edit'
                                    title="Editar"></i></a>
                        </td>
                        <td><a href="{{ route('campaign.delete', $campaign->uuid) }}"><i class='fa fa-trash'
                                    title="Excluir"></i></a>
                        </td>

                    </tr>
                @empty
                    <tr>
                        <td colspan=7>Não encontramos registros.</td>
                    </tr>
                @endforelse
            </table>
            <p><a class='btn btn-primary btn-sm' href="javascript:history.back()"><i class="fas fa-arrow-circle-left">
                    </i> Voltar</a></p>


        </div>
    </div>
@endsection
