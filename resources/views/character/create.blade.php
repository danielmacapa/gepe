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
                                <label title="Distribua 12 pontos (mín. 2 e máx. 4)">Profissão</label>
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
                                <label title="Fornecido pelo mestre da campanha">Convite para Campanha</label>
                                <input type="text" class="form-control" name="campaign_uuid"
                                    value="{{ old('campaign_uuid') }}" placeholder="Opcional">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-2">
                        <div class="card-body">
                            <div class="form-group">
                                <label title="Distribua 12 pontos (mín. 2 e máx. 4)">ATRIBUTOS</label>
                            </div>
                            <!-- Tabela -->
                            <table class="table table-lg">
                                <tr>
                                    <th title="É a capacidade física e resistência">Força</th>
                                    <td> <input type="number" name="strenght" id="str" value="2" min="2" max="4" onchange="calcular()"
                                            required><br>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th title="Representa os reflexos e a velocidade">Agilidade</th>
                                    <td> <input type="number" name="agility" id="agi" value="2" min="2" max="4" onchange="calcular()"
                                            required><br>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th title="Inteligência e capacidade de raciocínio">Astúcia</th>
                                    <td> <input type="number" name="wits" id="wit" value="2" min="2" max="4" onchange="calcular()"
                                            required><br>
                                        </select>
                                    </td>
                                </tr>
                                <tr>
                                    <th title="É o potencial de interação social">Empatia</th>
                                    <td> <input type="number" name="empathy" id="emp" value="2" min="2" max="4" onchange="calcular()"
                                            required><br>
                                        </select>
                                    </td>
                                </tr>
                            </table><br>
                            <div id="resultado" style="color:orange"><b>Distribua 4 pontos</b></div>
                            </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary m-1">Cadastrar</button>
                    <a class='btn btn-secondary m-1' href="{{ route('manager.character.list') }}"><i
                            class="fas fa-arrow-circle-left">
                        </i> Voltar</a>
                </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <script>
        function calcular() {
            var str = parseInt(document.getElementById('str').value, 10);
            var agi = parseInt(document.getElementById('agi').value, 10);
            var wit = parseInt(document.getElementById('wit').value, 10);
            var emp = parseInt(document.getElementById('emp').value, 10);
            var res = 12-(str + agi + wit + emp);
            if (res == 0) {
                msg = `Pontos distribuídos corretamente`;
                sty = "green";
                wei = "bold"
            }
            else {
                if (res > 0) {
                    msg = `Distribua ${res} ponto(s)`;
                    sty = "orange";
                    wei = "bold"
                }
                else {
                    msg = `Pontos excedentes. Retire ${(res)*-1} ponto(s)`;
                    sty = "red";
                    wei = "normal"
                }
            }
            document.getElementById('resultado').innerHTML = msg;
            resultado.style.color = sty;
            resultado.style.fontWeight = wei;
        }
        </script>
            {{-- <script>
                function calcular() {
                    var str = parseInt(document.getElementById('str').value, 10);
                    var agi = parseInt(document.getElementById('agi').value, 10);
                    var wit = parseInt(document.getElementById('wit').value, 10);
                    var emp = parseInt(document.getElementById('emp').value, 10);
                    var res = 12-(str + agi + wit + emp);
                    if (res == 0) {
                        document.getElementById('resultado').innerHTML = `Pontos distribuídos corretamente`;
                        document.style.backgroundColor = "green";
                        document.style.color = "white";
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
                </script> --}}

@endsection
