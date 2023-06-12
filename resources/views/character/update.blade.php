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
                        @role('admin')
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
                        @endrole
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
                        @role('admin')
                            <div class="form-group">
                                <label>Campanha</label>
                                <select class="form-control" name="campaign_id" required>
                                    <option value="">Selecione</option>
                                    @forelse ($campaigns as $campaign)
                                        <option value="{{ $campaign->id }}" @if ($campaign->id == $character->campaign_id) selected @endif>
                                            {{ $campaign->name }}
                                        </option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                        @endrole
                    </div>
                </div>
                <div class="col-lg-6 col-2">
                    <div class="card-body">
                        <table class="table table-lg">
                            <tr>
                                <th colspan="2" title="Distribua 12 pontos (mín. 2 e máx. 4)">ATRIBUTOS</th>
                            </tr>
                            <tr>
                                <th title="É a capacidade física e resistência">Força</th>
                                <td> <input type="number" name="strenght" id="str" value="{{ $character->strenght }}" min="2" max="4" onchange="calcular()" required><br>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th title="Representa os reflexos e a velocidade">Agilidade</th>
                                <td> <input type="number" name="agility" id="agi" value="{{ $character->agility }}" min="2" max="4" onchange="calcular()" required><br>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th title="Inteligência e capacidade de raciocínio">Astúcia</th>
                                <td> <input type="number" name="wits" id="wit" value="{{ $character->wits }}" min="2" max="4" onchange="calcular()" required><br>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <th title="É o potencial de interação social">Empatia</th>
                                <td> <input type="number" name="empathy" id="emp" value="{{ $character->empathy }}" min="2" max="4" onchange="calcular()" required><br>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <br>
                            <div id="resultado">Pontos distribuídos corretamente</div>
                            </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <input type="hidden" name="action" value="Enviar">
                <button type="submit" class="btn btn-primary m-1">Atualizar</button>
                <a class='btn btn-secondary m-1' href="{{ route('manager.character.list') }}"><i
                        class="fas fa-arrow-circle-left">
                    </i> Voltar</a>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
    <script>
        function calcular() {
            var str = parseInt(document.getElementById('str').value, 10);
            var agi = parseInt(document.getElementById('agi').value, 10);
            var wit = parseInt(document.getElementById('wit').value, 10);
            var emp = parseInt(document.getElementById('emp').value, 10);
            var res = 12-(str + agi + wit + emp);
            if (res == 0) {
                var msg = `Pontos distribuídos corretamente`;
            }
            else {
                if (res > 0) {
                    var msg = `Distribua ${res} ponto(s)`;
                }
                else {
                    var msg = `Pontos excedentes. Retire ${(res)*-1} ponto(s)`;
                }
            }
            document.getElementById('resultado').innerHTML = msg;
        }
        </script>
    @endsection
