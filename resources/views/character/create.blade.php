<html>
@extends('template.master2')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Cadastro de Personagem</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form" method="post" action="{{ route('character.store') }}">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-2">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" name="name" placeholder="Nome" required>
                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" class="form-control" name="slug" placeholder="Slug" required>
                        </div>
                        <div class="form-group">
                            <label>Jogador</label>
                            <select class="form-control" name="player_id" required>
                                @forelse ($players as $player)
                                    <option value="{{ $player->id }}">{{ $player->name }}</option><br>
                                @empty
                                @endforelse
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-2">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Ascendência</label>
                            <select class="form-control" name="race_id" required>
                                @forelse ($races as $race)
                                    <option value="{{ $race->id }}">{{ $race->name }}</option><br>
                                @empty
                                @endforelse
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Profissão</label>
                            <select class="form-control" name="profession_id" required>
                                @forelse ($professions as $profession)
                                    <option value="{{ $profession->id }}">{{ $profession->name }}</option><br>
                                @empty
                                @endforelse
                            </select>
                        </div>
                        <table class="table table-lg">
                            <tr>
                                <th colspan="2">ATRIBUTOS (2 a 4, total 12)</th>
                            </tr>
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
                    </div>
                </div>
                <div class="card-footer">
                    <button type="reset" name="Limpar" class="btn btn-light">Limpar</button>
                    <input type="hidden" name="action" value="Enviar">
                    <button type="submit" class="btn btn-primary">Cadastrar</button><br>
                    <a class='btn btn-secundary' href="javascript:history.back()"><i class="fas fa-arrow-circle-left">
                        </i> Voltar</a>
                </div>
        </form>
    </div>
    <!-- /.card-body -->
@endsection

</html>
