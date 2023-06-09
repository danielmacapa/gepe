@extends('template.master')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Detalhes da Campanha</h3>
            {{-- <div class="card-tools">
                <div class="row">
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <a class='btn btn-primary btn-sm' href="{{ route('manager.campaign.update', $campaign->uuid) }}"><i
                                class='fa fa-edit'></i></a>
                    </div>
                    <div class="input-group input-group-sm" style="width: 150px;">
                        <a class='btn btn-primary btn-sm' href="{{ route('manager.campaign.delete', $campaign->uuid) }}"><i
                                class='fa fa-trash'></i></a>
                    </div>
                </div>
            </div> --}}
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <div class="row">
                <div class="table table-lg">
                    <table>
                        <tr>
                            <th class="table-primary">Nome:</th>
                            <th>{{ $campaign->name }}</th>
                        </tr>
                        <tr>
                            <th class="table-primary">Resumo:</th>
                            <td>{{ $campaign->resume }}</td>
                        </tr>
                        <tr>
                            <th class="table-primary">Descrição:</th>
                            <td>{{ $campaign->description }}</td>
                        </tr>
                        <tr>
                            <th class="table-primary">Convite:</th>
                            {{-- <td>{{ $campaign->uuid }}</td> --}}
                            <td><input type="text" id="texto" value={{ $campaign->uuid }} />
                                <button onclick="copiarTexto()"><i class='fa fa-copy' title="Copiar"></i></button>
                            </td>
                            <script>
                                function copiarTexto() {
                                    let textoCopiado = document.getElementById("texto");
                                    textoCopiado.select();
                                    textoCopiado.setSelectionRange(0, 99999)
                                    document.execCommand("copy");
                                    alert("Convite copiado");
                                }
                            </script>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
        <!-- /.card-body -->
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card-primary">
                <div class="card-header">
                    <h3 class="card-title">Personagens da campanha <b>{{ $campaign->name }}</b></h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Ascendência</th>
                                <th>Profissão</th>
                                <th>Jogador</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($campaign->characters as $character)
                                <tr>
                                    <td>{{ $character->name }}</td>
                                    <td>{{ $character->race->name }}</td>
                                    <td>{{ $character->profession->name }}</td>
                                    <td>{{ $character->user->name }}</td>
                                    <!-- As três views abaixo requerem uuid do registro, conforme rota -->
                                    <td><a href="{{ route('manager.character.show', $character->uuid) }}"><i
                                                class='fa fa-eye' title="Detalhes"></i></a>
                                    </td>
                                    {{-- <td><a href="{{ route('manager.character.update', $character->uuid) }}"><i
                                                class='fa fa-edit' title="Editar"></i></a>
                                    </td>
                                    <td><a href="{{ route('manager.character.delete', $character->uuid) }}"><i
                                                class='fa fa-trash' title="Excluir"></i></a>
                                    </td> --}}
                                </tr>
                            @empty
                                <tr>
                                    <td colspan=6>Não encontramos registros.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table><br>
                    <p><a class='btn btn-primary btn-sm' href="{{ route('manager.campaign.list') }}"><i
                                class="fas fa-arrow-circle-left">
                            </i> Voltar</a></p>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>
@endsection
