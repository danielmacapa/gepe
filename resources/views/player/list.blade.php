<html>
@extends('template.master')

@section('title')
    Lista de Jogadores
@endsection

@section('content')
    <div class='container-fluid'>
        <a class='btn btn-primary btn-sm' href="{{ route('player.create') }}"><i class='fa fa-plus'></i> Cadastrar Novo
        </a>
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
                        <td><a href="{{ route('player.show', $player->uuid) }}"><i class='fa fa-eye'></a></td>
                        <td><a href="{{ route('player.update', $player->uuid) }}"><i class='fa fa-edit'></a></td>
                        <td><a href="{{ route('player.delete', $player->uuid) }}"><i class='fa fa-trash'></a></td>

                    </tr>
                @empty
                    <tr>
                        <td colspan=5>Não encontramos registros.</td>
                    </tr>
                @endforelse
                <tr>
                    <td><a href="../">Voltar</a></td>
                </tr>

            </table>
        </div>
    </div>
@endsection

</html>
