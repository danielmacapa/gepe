<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GEPE | Gerenciador de Personagens</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('adminlte/css/adminlte.css') }}">
    <!-- Tema próprio -->
    <link rel="stylesheet" href="{{ asset('adminlte/css/styleindex.css') }}">
</head>

<body id="body" class=".img-responsive">
    <div class="wrapper">

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            <div class="content">
                <div class="container">
                    @yield('content')
                </div>
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
        @include('template.footer')

    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('adminlte/plugins/jquery/jquery.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('adminlte/plugins/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('adminlte/js/adminlte.js') }}"></script>
</body>

</html>
