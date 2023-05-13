<html>
@extends('template.master')

@section('title')
    Lista de Ascendências
@endsection

@section('content')
    <div class='container-fluid'>
        <a class='btn btn-primary btn-sm' href="{{ route('race.create') }}"><i class='fa fa-plus'></i> Cadastrar Novo
        </a>
        <div class="card">
            <table class="table table-lg">
                <tr class="table-primary">
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Talento</th>
                    <th colspan="4">Descrição do Talento</th>
                </tr>

                @forelse ($races as $race)
                    <tr>
                        <td>{{ $race->name }}</td>
                        <td>{{ $race->description }}</td>
                        <td>{{ $race->talent_name }}</td>
                        <td>{{ $race->talent_description }}</td>
                        <!-- As três views abaixo requerem uuid do registro, conforme rota -->
                        <td><a href="{{ route('race.show', $race->uuid) }}"><i class='fa fa-eye'></a></td>
                        <td><a href="{{ route('race.update', $race->uuid) }}"><i class='fa fa-edit'></a></td>
                        <td><a href="{{ route('race.delete', $race->uuid) }}"><i class='fa fa-trash'></a></td>

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
