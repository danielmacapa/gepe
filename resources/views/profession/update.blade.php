@extends('template.master')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edição de Profissão</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form" method="post" action="{{ route('profession.put') }}">
            @csrf
            <!-- expira sessão-->
            @method('PUT')
            <!-- habilita PUT como método -->
            <div class="row">
                <div class="col-lg-6 col-2">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" name="name" value="{{ $profession->name }}"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Descrição</label>
                            <textarea class="form-control" name="description">{{ $profession->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" class="form-control" name="slug" value="{{ $profession->slug }}"
                                required>
                        </div>
                        <input type="hidden" class="form-control" name="uuid" value="{{ $profession->uuid }}">
                    </div>
                </div>
                <div class="col-lg-6 col-2">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Talento</label>
                            <input type="text" class="form-control" name="talent_name"
                                value="{{ $profession->talent_name }}" required>
                        </div>
                        <div class="form-group">
                            <label>Descrição do talento</label>
                            <textarea class="form-control" name="talent_description">{{ $profession->talent_description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label>Equipamento</label>
                            <input type="text" class="form-control" name="equipment" value="{{ $profession->equipment }}"
                                required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a class='btn btn-secundary' href="{{ route('profession.list') }}"><i class="fas fa-arrow-circle-left">
                    </i> Voltar</a>
                <input type="hidden" name="action" value="Enviar">
                <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
@endsection
