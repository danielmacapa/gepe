@extends('template.master')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Detalhes do Usuário</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="table table-lg">
                <table>
                    <tr>
                        <th class="table-primary">Nome:</th>
                        <th>{{ $user->name }}</th>
                    </tr>
                    <th class="table-primary">E-mail:</th>
                    <td>{{ $user->email }}</td>
                    </tr>
                    <tr>
                        <th class="table-primary">Cadastrado(a) em:</th>
                        <td>{{ $user->created_at }}</td>
                    </tr>
                    <tr>
                        <th class="table-primary">Atualizado(a) em:</th>
                        <td>{{ $user->updated_at }}</td>
                    </tr>
                </table>
                <br>
                <a class='btn btn-primary btn-sm' href="{{ route('user.list') }}"><i class="fas fa-arrow-circle-left">
                    </i> Voltar</a>

            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card-primary">
                <div class="card-header">
                    <h3 class="card-title">Personagens do usuário <b>{{ $user->name }}</b></h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 150px;">
                            <input type="text" name="table_search" class="form-control float-right"
                                placeholder="Pesquisar">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Ascendência</th>
                                <th colspan="4">Profissão</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($user->characters as $character)
                                <tr>
                                    <td>{{ $character->name }}</td>
                                    <td>{{ $character->race->name }}</td>
                                    <td>{{ $character->profession->name }}</td>
                                    <!-- As três views abaixo requerem uuid do registro, conforme rota -->
                                    <td><a href="{{ route('character.show', $character->uuid) }}"><i class='fa fa-eye'
                                                title="Detalhes"></i></a>
                                    </td>
                                    <td><a href="{{ route('character.update', $character->uuid) }}"><i class='fa fa-edit'
                                                title="Editar"></i></a>
                                    </td>
                                    <td><a href="{{ route('character.delete', $character->uuid) }}"><i class='fa fa-trash'
                                                title="Excluir"></i></a>
                                    </td>

                                </tr>
                            @empty
                                <tr>
                                    <td colspan=6>Não encontramos registros.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <p><a class='btn btn-primary btn-sm' href="{{ route('user.list') }}"><i
                                class="fas fa-arrow-circle-left">
                            </i> Voltar</a></p>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
