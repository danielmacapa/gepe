@extends('template.master')

@section('content')
    <div class='container-fluid'>

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Vincular Jogadores à Campanha</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form class="form" method="post" action="{{ route('campaign_user.store') }}">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-2">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Jogador</label>
                                <select class="form-control" name="user_id" required>
                                    @forelse ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option><br>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Campanha</label>
                                <select class="form-control" name="campaign_id" required>
                                    @forelse ($campaigns as $campaign)
                                        <option value="{{ $campaign->id }}">{{ $campaign->name }}</option><br>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="reset" name="Limpar" class="btn btn-light">Limpar</button>
                            <input type="hidden" name="action" value="Enviar">
                            <button type="submit" class="btn btn-primary">Cadastrar</button><br>
                            <a class='btn btn-secundary' href="{{ route('campaign_user.list') }}"><i
                                    class="fas fa-arrow-circle-left">
                                </i> Voltar</a>
                        </div>
            </form>
        </div>
        <!-- /.card-body -->
    </div>
@endsection
