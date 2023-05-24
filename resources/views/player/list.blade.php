@extends('template.master')

@section('title')
    Lista de Jogadores
@endsection

@section('novo')
    <a class='btn btn-primary btn-sm' href="{{ route('register') }}"><i class='fa fa-plus'></i> Cadastrar Novo
    </a>
@endsection

@section('content')
    <div class='container-fluid'>
        <div class="card">
            <table class="table table-lg">
                <tr class="table-primary">
                    <th>Nome</th>
                    <th colspan="4">Email</th>
                </tr>

                @forelse ($players as $player)
                    <tr>
                        <td>{{ $player->name }}</td>
                        <td>{{ $player->email }}</td>
                        <!-- As três views abaixo requerem uuid do registro, conforme rota -->
                        <td><a href="{{ route('player.show', $player->uuid) }}"><i class='fa fa-eye' title="Detalhes"></i></a>
                        </td>
                        <td><a href="{{ route('player.update', $player->uuid) }}"><i class='fa fa-edit'
                                    title="Editar"></i></a>
                        </td>
                        <td><a href="{{ route('player.delete', $player->uuid) }}"><i class='fa fa-trash'
                                    title="Excluir"></i></a></td>

                    </tr>
                @empty
                    <tr>
                        <td colspan=5>Não encontramos registros.</td>
                    </tr>
                @endforelse
            </table>
            <p><a class='btn btn-primary btn-sm' href="javascript:history.back()"><i class="fas fa-arrow-circle-left">
                    </i> Voltar</a></p>
        </div>
    </div>
@endsection
