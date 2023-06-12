@extends('template.master')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Detalhes do Personagem</h3>
        </div>
        <!-- Tabelas -->
        <div class="row">
            <!-- Características -->
            <div class="col-lg-4">
                <div class="card-body">
                    <div class="table table-lg">
                        <table>
                            <tr>
                                <th class="table-primary">Nome:</th>
                                <th>{{ $character->name }}</th>
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
                                <th class="table-primary" title="Equipamento inicial">Equipamento:</th>
                                <td>{{ $character->profession->equipment }}</td>
                            </tr>
                            @role('admin')
                            <tr>
                                <th class="table-primary">Jogador:</th>
                                <td>{{ $character->user->name }}</td>
                            </tr>
                            <tr>
                                <th class="table-primary">Campanha:</th>
                                <td>{{ $character->campaign->name }}</td>
                            </tr>
                            @endrole
                        </table>
                    </div>
                </div>
            </div>
            <!-- Atributos -->
            <div class="col-lg-4">
                <div class="card-body">
                    <table class="table table-lg">
                        <tr style="text-align: center">
                            <th colspan="2">ATRIBUTOS</th>
                            <th></th>
                        </tr>
                        <tr>
                            <th title="É a capacidade física e resistência">Força</th>
                            <td>{{ $character->strenght }}</td>
                            <input type="hidden" id="campo1" value="{{$character->strenght}}">
                            <td style="text-align: center"><button onclick="rollingDices(1)"><i
                                class='fa fa-dice' title="Rolar"></i></button>
                            </td>
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
                </div>
            </div>
            <!-- Rolagem -->
            <div class="col-lg-4">
                <div class="card-body">
                    <table class="table table-lg">
                        <tr style="text-align: center">
                            <th>Resultado</th>
                        </tr>
                        <tr>
                            <th class="celula-alinhada" id="resultado"></th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div>
        <a class='btn btn-primary' href="javascript:history.back()"><i
            class="fas fa-arrow-circle-left">
            </i> Voltar</a>
    </div>

@endsection
