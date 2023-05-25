@extends('template.master')

@section('title')
    Lista de Personagens
@endsection

@section('novo')
    <a class='btn btn-primary btn-sm' href="{{ route('character.create') }}"><i class='fa fa-plus'></i> Cadastrar Novo
    </a>
@endsection

@section('content')
    <div class='container-fluid'>
        <div class="card">
            <table class="table table-lg">
                <tr class="table-primary">
                    <th>Nome</th>
                    <th>Ascendência</th>
                    <th>Profissão</th>
                    <th>Jogador</th>
                    <th colspan="4">Campanha</th>
                </tr>
                @forelse ($characters as $character)
                    <tr>
                        <td>{{ $character->name }}</td>
                        <td>{{ $character->race->name }}</td>
                        <td>{{ $character->profession->name }}</td>
                        <td>{{ $character->user->name }}</td>
                        <td>{{ $character->campaign->name }}</td>
                        <!-- As três views abaixo requerem uuid do registro, conforme rota -->
                        <td><a href="{{ route('character.show', $character->uuid) }}"><i class='fa fa-eye'
                                    title="Detalhes"></i></a></td>
                        <td><a href="{{ route('character.update', $character->uuid) }}"><i class='fa fa-edit'
                                    title="Editar"></i></a></td>
                        <td><a href="{{ route('character.delete', $character->uuid) }}"><i class='fa fa-trash'
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
