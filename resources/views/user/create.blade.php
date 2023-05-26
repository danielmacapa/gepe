@extends('template.master')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Cadastro de Usuário</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form" method="post" action="{{ route('user.store') }}">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-2">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" name="name" placeholder="Nome" required>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                    </div>
                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" class="form-control" name="password" placeholder="8 dígitos" required>
                    </div>
                    <div class="form-group">
                        <label>Cargo</label>
                        <input type="text" class="form-control" name="#" placeholder="Cargo">
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="reset" name="Limpar" class="btn btn-light">Limpar</button>
                <input type="hidden" name="action" value="Enviar">
                <button type="submit" class="btn btn-primary">Cadastrar</button><br>
                <a class='btn btn-secundary' href="{{ route('user.list') }}"><i class="fas fa-arrow-circle-left">
                    </i> Voltar</a>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
@endsection
