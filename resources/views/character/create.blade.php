@extends('template.master')

@section('content')
    <div class='container-fluid'>

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Cadastro de Personagem</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form" method="post" action="{{ route('manager.character.store') }}">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-2">
                        <div class="card-body">
                            {{-- <div class="form-group">
                                <label>Jogador</label>
                                <select class="form-control" name="user_id" required>
                                    @forelse ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option><br>
                                    @empty
                                    @endforelse
                                </select>
                            </div> --}}
                            <div class="form-group">
                                <label>Nome do Personagem</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                    placeholder="Nome" required>
                            </div>
                            <div class="form-group">
                                <label>Ascendência</label>
                                <select class="form-control" name="race_id" required>
                                    <option value="">Selecione</option>
                                    @forelse ($races as $race)
                                        <option @if ($race->id == old('race_id')) selected @endif
                                            value="{{ $race->id }}">{{ $race->name }}</option><br>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Profissão</label>
                                <select class="form-control" name="profession_id" required>
                                    <option value="">Selecione</option>
                                    @forelse ($professions as $profession)
                                        <option @if ($profession->id == old('profession_id')) selected @endif
                                            value="{{ $profession->id }}">{{ $profession->name }}</option><br>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Convite para Campanha</label>
                                <input type="text" class="form-control" name="campaign_uuid"
                                    value="{{ old('campaign_uuid') }}" placeholder="Opcional">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-2">
                        <div class="card-body">
                            <div class="form-group">
                                <label>ATRIBUTOS</label>
                            </div>
                            <!-- Tabela -->
                            <table class="table table-lg">
                                <tr>
                                    <th>Força</th>
                                    <td> <input type="number" name="strenght" value="2" min="2" max="4"
                                            required><br>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Agilidade</th>
                                    <td> <input type="number" name="agility" value="2" min="2" max="4"
                                            required><br>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Astúcia</th>
                                    <td> <input type="number" name="wits" value="2" min="2" max="4"
                                            required><br>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Empatia</th>
                                    <td> <input type="number" name="empathy" value="2" min="2" max="4"
                                            required><br>
                                        </select>
                                    </td>
                                </tr>
                            </table>
                            <!-- Fim da Tabela -->
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="reset" name="Limpar" class="btn btn-light">Limpar</button>
                    <input type="hidden" name="action" value="Enviar">
                    <button type="submit" class="btn btn-primary">Cadastrar</button><br>
                    <a class='btn btn-secundary' href="{{ route('manager.character.list') }}"><i
                            class="fas fa-arrow-circle-left">
                        </i> Voltar</a>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
