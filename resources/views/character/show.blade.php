@extends('template.master')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Detalhes do Personagem</h3>
        </div>
        <!-- /.card-header -->
        <div class="row">
            <div class="col-lg-6 col-2">
                <div class="card-body">
                    <div class="table table-lg">
                        <table>
                            <tr>
                                <th class="table-primary">Nome:</th>
                                <th>{{ $character->name }}</th>
                            </tr>
                            <tr>
                                <th class="table-primary">Jogador:</th>
                                <td>{{ $character->user->name }}</td>
                            </tr>
                            <tr>
                                <th class="table-primary">Nível:</th>
                                <td>{{ $character->level }}</td>
                            </tr>
                            <th class="table-primary">Ascendência:</th>
                            <td>{{ $character->race->name }}</td>
                            </tr>
                            <tr>
                                <th class="table-primary">Profissão:</th>
                                <td>{{ $character->profession->name }}</td>
                            </tr>
                            <tr>
                                <th class="table-primary">Equipamento:</th>
                                <td>{{ $character->profession->equipment }}</td>
                            </tr>
                        </table>
                    </div>
                </div> <!-- /.card-body -->
            </div> <!-- /.col -->
            <div class="col-lg-6 col-2">
                <div class="card-body">
                    <table class="table table-lg">
                        <tr>
                            <th colspan="2">ATRIBUTOS</th>
                        </tr>
                        <tr>
                            <th>Força</th>
                            <td>{{ $character->strenght }}</td>
                        </tr>
                        <tr>
                            <th>Agilidade</th>
                            <td>{{ $character->agility }}</td>
                        </tr>
                        <tr>
                            <th>Astúcia</th>
                            <td>{{ $character->wits }}</td>
                        </tr>
                        <tr>
                            <th>Empatia</th>
                            <td>{{ $character->empathy }}</td>
                        </tr>

                    </table>

                </div> <!-- /.card-body -->
            </div> <!-- /.col -->
        </div> <!-- /.row -->
        <div>
            <a class='btn btn-primary btn-sm' href="{{ route('manager.character.list') }}"><i
                    class="fas fa-arrow-circle-left">
                </i> Voltar</a>
        </div>

    </div>
@endsection
