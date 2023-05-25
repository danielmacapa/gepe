@extends('template.master')

@section('content')
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edição de Usuário</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form" method="post" action="{{ route('user.put') }}">
            @csrf
            <!-- expira sessão-->
            @method('PUT')
            <!-- habilita PUT como método -->
            <div class="row">
                <div class="col-lg-6 col-2">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nome</label>
                            <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                        </div>
                        <input type="hidden" class="form-control" name="uuid" value="{{ $user->uuid }}">
                    </div>
                </div>
                <div class="col-lg-6 col-2">
                    <div class="card-body">
                        <div class="form-group">
                            <label>E-mail</label>
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                        </div>
                        <div class="form-group">
                            <label>Senha</label>
                            <input type="password" class="form-control" name="password" value="{{ $user->password }}"
                                required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a class='btn btn-secundary' href="{{ route('user.list') }}"><i class="fas fa-arrow-circle-left">
                    </i> Voltar</a>
                <input type="hidden" name="action" value="Enviar">
                <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
        </form>
    </div>
    <!-- /.card-body -->
@endsection
