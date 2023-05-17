@extends('template.master2')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edição de Ascendência</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form" method="post" action="{{ route('race.put') }}">
            @csrf
            <!-- expira sessão-->
            @method('PUT')
            <!-- habilita PUT como método -->
            <div class="row">
                <div class="col-lg-6 col-2">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" name="name" value="{{ $race->name }}" required>
                        </div>
                        <div class="form-group">
                            <label>Descrição</label>
                            <textarea class="form-control" name="description">{{ $race->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" class="form-control" name="slug" value="{{ $race->slug }}" required>
                        </div>

                        <input type="hidden" class="form-control" name="uuid" value="{{ $race->uuid }}">
                    </div>
                </div>
                <div class="col-lg-6 col-2">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Talento</label>
                            <input type="text" class="form-control" name="talent_name" value="{{ $race->talent_name }}"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Descrição do talento</label>
                            <textarea class="form-control" name="talent_description">{{ $race->talent_description }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a class='btn btn-secundary' href="javascript:history.back()"><i class="fas fa-arrow-circle-left">
                    </i> Voltar</a>
                <input type="hidden" name="action" value="Enviar">
                <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
@endsection
