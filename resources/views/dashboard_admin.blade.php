@extends('template.master')

@section('content')
    <div class="col-12">
        <!-- Título -->
        <div class="card-primary">
            <div class="card-header">
                <h3 class="card-title">Painel do Administrador</h3>
            </div><br>
        </div>
        <!-- Conteúdo -->
        <div class="row">
            <div class="container-fluid">
                <!-- Caixas -->
                <div class="row" style="text-align:center">
                    <!-- Personagens -->
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-info">
                            <div class="icon-holder">
                                <br><img src="{{ asset('custom/img/character.png') }}" width="54" height="52"
                                alt="icon id-card" class="img-responsive">
                            </div>
                            <div class="inner">
                                <h3>{{count($characters)}}</h3>
                                <h5>Personagens</h5>
                            </div>
                        <a href="{{route('admin.character.list')}}" class="small-box-footer">Lista <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- Campanhas -->
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="icon-holder">
                                <br><img src="{{ asset('custom/img/campaign.png') }}" width="54" height="52"
                                alt="icon id-card" class="img-responsive">
                            </div>
                        <div class="inner">
                            <h3>{{count($campaigns)}}</h3>
                            <h5>Campanhas</h5>
                        </div>
                        <a href="{{route('admin.campaign.list')}}" class="small-box-footer">Lista <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- Ascendências -->
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning">
                            <div class="icon-holder">
                                <br><img src="{{ asset('custom/img/race.png') }}" width="54" height="52"
                                alt="icon id-card" class="img-responsive">
                            </div>
                        <div class="inner">
                            <h3>{{count($races)}}</h3>
                            <h5>Ascendências</h5>
                        </div>
                        <a href="{{route('admin.race.list')}}" class="small-box-footer">Lista <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <!-- Profissões -->
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-danger">
                            <div class="icon-holder">
                                <br><img src="{{ asset('custom/img/profession.png') }}" width="54" height="52"
                                alt="icon id-card" class="img-responsive">
                            </div>
                        <div class="inner">
                            <h3>{{count($professions)}}</h3>
                            <h5>Profissões</h5>
                        </div>
                        <a href="{{route('admin.profession.list')}}" class="small-box-footer">Lista <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Rolador -->
                <div class="row">
                    <div class="col-lg-6">
                        <table>
                            <tr><th>Rolador</th></tr>
                        </table><br>
                        <div class="row">
                        <div class="small-box col-6">
                            <table>
                                <tr>
                                    <th colspan="2">Dados</th>
                                </tr>
                                <tr>
                                    <td><input type="number" id="campo1" value="1" max="12"></td>
                                    <td><button onclick="rollingDices(1)"><i class='fa fa-dice' title="Rolar"></i></button></td>
                                </tr>
                            </table>
                        </div>
                        <div class="small-box col-6">
                            <table>
                                <tr>
                                    <th>Resultado</th>
                                </tr>
                                <tr>
                                    <td id="resultado"></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  @endsection
