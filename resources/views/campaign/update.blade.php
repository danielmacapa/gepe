@extends('template.master')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edição de Campanha</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form" method="post" action="{{ route('manager.campaign.put') }}">
            @csrf
            <!-- expira sessão-->
            @method('PUT')
            <!-- habilita PUT como método -->
            <div class="row">
                <div class="col-lg-6 col-2">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" name="name" value="{{ $campaign->name }}"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Resumo</label>
                            <input type="text" class="form-control" name="resume" value="{{ $campaign->resume }}"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Descrição</label>
                            <textarea class="form-control" name="description">{{ $campaign->description }}</textarea>
                        </div>
                        <input type="hidden" class="form-control" name="uuid" value="{{ $campaign->uuid }}">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a class='btn btn-secundary' href="{{ route('manager.campaign.list') }}"><i
                        class="fas fa-arrow-circle-left">
                    </i> Voltar</a>
                <input type="hidden" name="action" value="Enviar">
                <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
@endsection
