@extends('template.master2')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Cadastro de Profissão</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form" method="post" action="{{ route('profession.store') }}">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-2">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" name="name" placeholder="Nome" required>
                        </div>
                        <div class="form-group">
                            <label>Descrição</label>
                            <textarea class="form-control" name="description" placeholder="Descrição"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" class="form-control" name="slug" placeholder="Slug" required>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-2">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Talento</label>
                            <input type="text" class="form-control" name="talent_name" placeholder="Nome do talento"
                                required>
                        </div>
                        <div class="form-group">
                            <label>Descrição do talento</label>
                            <textarea class="form-control" name="talent_description" placeholder="Descrição do talento"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Equipamento</label>
                            <input type="text" class="form-control" name="equipment" placeholder="Equipamento" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="reset" name="Limpar" class="btn btn-light">Limpar</button>
                <input type="hidden" name="action" value="Enviar">
                <button type="submit" class="btn btn-primary">Cadastrar</button><br>
                <a class='btn btn-secundary' href="javascript:history.back()"><i class="fas fa-arrow-circle-left">
                    </i> Voltar</a>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
@endsection
