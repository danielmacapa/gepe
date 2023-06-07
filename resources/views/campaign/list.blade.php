@extends('template.master')

@section('novo')
    <a class='btn btn-primary btn-sm' href="{{ route('manager.campaign.create') }}"><i class='fa fa-plus'></i> Cadastrar Nova
    </a>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card-primary">
                <div class="card-header">
                    <h3 class="card-title">Lista de Campanhas</h3>
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
                </div><br>
                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr class="table-primary">
                                <th>Nome</th>
                                <th>Resumo</th>
                                <th colspan="2"><th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($campaigns as $campaign)
                                <tr>
                                    <td>{{ $campaign->name }}</td>
                                    <td>{{ $campaign->resume }}</td>
                                    <!-- As três views abaixo requerem uuid do registro, conforme rota -->
                                    <td><a href="{{ route('manager.campaign.show', $campaign->uuid) }}"><i class='fa fa-eye'
                                                title="Detalhes"></i></a>
                                    </td>
                                    <td><a href="{{ route('manager.campaign.update', $campaign->uuid) }}"><i
                                                class='fa fa-edit' title="Editar"></i></a>
                                    </td>
                                    <td><a href="{{ route('manager.campaign.delete', $campaign->uuid) }}"><i
                                                class='fa fa-trash' title="Excluir"></i></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan=5>Não encontramos registros.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
                <div>
                    <p><br><a class='btn btn-primary btn-sm' href="javascript:history.back()"><i
                    class="fas fa-arrow-circle-left">
                </i> Voltar</a></p>
                </div>
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
