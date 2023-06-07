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
                            @role('admin')
                            <tr>
                                <th class="table-primary">Jogador:</th>
                                <td>{{ $character->user->name }}</td>
                            </tr>
                            @endrole
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
                                <th class="table-primary" title="Equipamento inicial">Equipamento:</th>
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
                            <th colspan="3">ATRIBUTOS</th>
                            <th style="text-align: center">Resultado<th>
                        </tr>
                        <tr>
                            <th title="É a capacidade física e resistência">Força</th>
                            <td>{{ $character->strenght }}</td>
                            <input type="hidden" id="campo1" value="{{$character->strenght}}">
                            <td style="text-align: center"><button onclick="rollingDices(1)"><i
                                class='fa fa-dice' title="Rolar"></i></button>
                            </td>
                            <th rowspan="4" class="celula-alinhada" id="resultado"></td>
                        </tr>
                        <tr>
                            <th title="Representa os reflexos e a velocidade">Agilidade</th>
                            <td>{{ $character->agility }}</td>
                            <input type="hidden" id="campo2" value="{{$character->agility}}">
                            <td style="text-align: center"><button onclick="rollingDices(2)"><i
                                class='fa fa-dice' title="Rolar"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th title="Inteligência e capacidade de raciocínio">Astúcia</th>
                            <td>{{ $character->wits }}</td>
                            <input type="hidden" id="campo3" value="{{$character->wits}}">
                            <td style="text-align: center"><button onclick="rollingDices(3)"><i
                                class='fa fa-dice' title="Rolar"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <th title="É o potencial de interação social">Empatia</th>
                            <td>{{ $character->empathy }}</td>
                            <input type="hidden" id="campo4" value="{{$character->empathy}}">
                            <td style="text-align: center"><button onclick="rollingDices(4)"><i
                                class='fa fa-dice' title="Rolar"></i></button>
                            </td>
                        </tr>
                    </table>
                    <script type="text/javascript">
                        function rollDice() {
                        return Math.floor(Math.random() * 6) + 1;
                        }

                        function rollMultipleDice(numDice, numFaces) {
                        const results = [];

                        for (let i = 0; i < numDice; i++) {
                            const roll = rollDice();
                            results.push(roll);
                        }

                        return results;
                        }

                        function rollingDices(campo) {
                        const campoId = 'campo' + campo;
                        const numDiceInput = document.getElementById(campoId);
                        const numDice = parseInt(numDiceInput.value, 10);
                        const numFaces = 6;

                        const rolls = rollMultipleDice(numDice, numFaces);
                        const resultadoElement = document.getElementById('resultado');
                        resultadoElement.textContent = rolls.join(', ');
                        }
                    </script>
                </div> <!-- /.card-body -->
            </div> <!-- /.col -->
        </div> <!-- /.row -->
    </div>
    <div>
        <a class='btn btn-primary btn-sm' href="{{ route('manager.character.list') }}"><i
                class="fas fa-arrow-circle-left">
            </i> Voltar</a>
    </div>

@endsection
