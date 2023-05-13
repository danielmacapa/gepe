<html>
@extends('template.master')

@section('title')
    Lista de Profissões
@endsection

@section('content')
    <div class='container-fluid'>
        <a class='btn btn-primary btn-sm' href="{{ route('profession.create') }}"><i class='fa fa-plus'></i> Cadastrar Novo
        </a>
        <div class="card">
            <table class="table table-lg">
                <tr class="table-primary">
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Talento</th>
                    <th>Descrição do Talento</th>
                    <th colspan="4">Equipamento</th>
                </tr>

                @forelse ($professions as $profession)
                    <tr>
                        <td>{{ $profession->name }}</td>
                        <td>{{ $profession->description }}</td>
                        <td>{{ $profession->talent_name }}</td>
                        <td>{{ $profession->talent_description }}</td>
                        <td>{{ $profession->equipment }}</td>
                        <!-- As três views abaixo requerem uuid do registro, conforme rota -->
                        <td><a href="{{ route('profession.show', $profession->uuid) }}"><i class='fa fa-eye'></a></td>
                        <td><a href="{{ route('profession.update', $profession->uuid) }}"><i class='fa fa-edit'></a></td>
                        <td><a href="{{ route('profession.delete', $profession->uuid) }}"><i class='fa fa-trash'></a></td>

                    </tr>

                @empty
                    <tr>
                        <td colspan=7>Não encontramos registros.</td>
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
