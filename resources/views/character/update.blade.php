@extends('template.master')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edição de Personagem</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form" method="post" action="{{ route('manager.character.put') }}">
            @csrf
            <!-- expira sessão-->
            @method('PUT')
            <!-- habilita PUT como método -->
            <div class="row">
                <div class="col-lg-6 col-2">
                    <div class="card-body">
                        <input type="hidden" name="uuid" value="{{ $character->uuid }}">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" name="name" value="{{ $character->name }}"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Jogador</label>
                            <select class="form-control" name="user_id" required>
                                @forelse ($users as $user)
                                    <option value="{{ $user->id }}" @if ($user->id == $character->user_id) selected @endif>
                                        {{ $user->name }}
                                    </option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ascendência</label>
                            <select class="form-control" name="race_id" required>
                                @forelse ($races as $race)
                                    <option value="{{ $race->id }}" @if ($race->id == $character->race_id) selected @endif>
                                        {{ $race->name }}
                                    </option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Profissão</label>
                            <select class="form-control" name="profession_id" required>
                                @forelse ($professions as $profession)
                                    <option value="{{ $profession->id }}" @if ($profession->id == $character->profession_id) selected @endif>
                                        {{ $profession->name }}
                                    </option>
                                @empty
                                @endforelse
                            </select>
                        </div>
                        {{-- <div class="form-group">
                            <label>Campanha</label>
                            <select class="form-control" name="campaign_id" required>
                                @forelse ($campaigns as $campaign)
                                    <option value="{{ $campaign->id }}" @if ($campaign->id == $character->campaign_id) selected @endif>
                                        {{ $campaign->name }}
                                    </option>
                                @empty
                                @endforelse
                            </select>
                        </div> --}}
                    </div>
                </div>
                <div class="col-lg-6 col-2">
                    <div class="card-body">
                        <table class="table table-lg">
                            <tr>
                                <th colspan="2">ATRIBUTOS (2 a 4, total 12)</th>
                            </tr>
                            <tr>
                                <th>Força</th>
                                <td> <input type="number" name="strenght" value="{{ $character->strenght }}" min="2"
                                        max="4" required><br>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Agilidade</th>
                                <td> <input type="number" name="agility" value="{{ $character->agility }}" min="2"
                                        max="4" required><br>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Astúcia</th>
                                <td> <input type="number" name="wits" value="{{ $character->wits }}" min="2"
                                        max="4" required><br>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th>Empatia</th>
                                <td> <input type="number" name="empathy" value="{{ $character->empathy }}" min="2"
                                        max="4" required><br>
                                    </select>
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a class='btn btn-secundary' href="{{ route('manager.character.list') }}"><i
                        class="fas fa-arrow-circle-left">
                    </i> Voltar</a>
                <input type="hidden" name="action" value="Enviar">
                <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
@endsection
