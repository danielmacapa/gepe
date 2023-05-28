<!DOCTYPE html>
<html lang="en">

<head>
    <!-- set the encoding of your site -->
    <meta charset="utf-8">
    <!-- set the viewport width and initial-scale on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- set the apple mobile web app capable -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- set the HandheldFriendly -->
    <meta name="HandheldFriendly" content="True">
    <!-- set the apple mobile web app status bar style -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- set the description -->
    <meta name="description" content="App Landing Page">
    <!-- set the Keyword -->
    <meta name="keywords"
        content="app, app landing, clean, landing, landing page, marketing, marketing landing, product, product landing, responsive, seo, startup landing ">
    <meta name="author" content="App Landing Page">
    <title>GEPE - Gerenciador de Personagens</title>
    <!-- include the site stylesheet -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7COswald:400,700"
        rel="stylesheet">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{ asset('custom/css/bootstrap.css') }}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{ asset('custom/css/plugins.css') }}">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('adminlte/plugins/fontawesome-free/css/all.css') }}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{ asset('custom/css/style.css') }}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{ asset('custom/css/colors.css') }}">
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{ asset('custom/css/responsive.css') }}">
    <!-- include the site stylesheet -->
    <style class="color_css"></style>
    <!-- include the site stylesheet -->
    <link rel="stylesheet" href="{{ asset('custom/css/site.css') }}">
</head>

<body>
    <!-- Wrapper of the page -->
    <div id="wrapper">
        <!-- Header of the page -->
        <header id="header">
            <div class="container">
                <div class="holder center-block">
                    <!-- Logo of the page -->
                    <div class="logo">
                        <a href="#">
                            <img src="{{ asset('custom/img/GEPELogo2.png') }}" alt="GEPE"
                                class="light img-responsive">
                            <img src="{{ asset('custom/img/GEPELogo1.png') }}" alt="GEPE"
                                class="dark img-responsive">
                        </a>
                    </div>
                    <!-- Logo of the page end -->
                    <!-- Navbar of the page -->
                    <nav class="navbar navbar-default">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <a href="{{ route('manager.dashboard') }}" class="btn btn-default btn-white">Acessar</a>
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#" data-scroll-nav="0">Início</a></li>
                                <li><a href="#" data-scroll-nav="1">Módulos</a></li>
                                <li><a href="#" data-scroll-nav="2">Sobre</a></li>
                                <li><a href="#" data-scroll-nav="3">Avaliações</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- Navbar of the page end -->
                </div>
            </div>
        </header>
        <!-- Header of the page end -->
        <!-- Main of the page -->
        <main id="main">
            <!-- Hero area of the page -->
            <section class="hero-area text-center" style="background-image: url({{ asset('custom/img/back.webp') }});"
                data-scroll-index="0">
                <div class="container">
                    <div class="row">
                        <header
                            class="heading-holder col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
                            <h1><span class="text-small">Um excelente Gerenciador de Personagens de RPG</span>Use GEPE
                                agora!</h1>
                            <p>Construa seu personagem com facilidade e rapidez. Gerencie sua ficha, salve, imprima!
                                Além disso, o GEPE conta também com um gerenciador de campanhas para seu mestre
                                utilizar.</p>
                        </header>
                    </div>
                    <div class="aligncenter">
                        <img src="{{ asset('custom/img/map_rpg.png') }}" alt="Mapa" class="img-responsive">
                    </div>
                </div>
            </section>
            <!-- Hero area of the page end -->
            <!-- Features area of the page -->
            <section class="features-area container" data-scroll-index="1">
                <div class="row">
                    <header class="col-xs-12 heading-wrap col-sm-6 col-sm-offset-3 text-center">
                        <h2 style="color:#fff">Uma excelente aplicação para gerenciar <br>sua campanha<span
                                style="color:#ffffff"> e fichas de personagens!</span>
                        </h2>
                    </header>
                </div>
                <!-- Features of the page -->
                <ul class="features-list">
                    <li>
                        <div class="icon-holder">
                            <img src="{{ asset('custom/img/character.png') }}" width="54" height="52"
                                alt="icon id-card" class="img-responsive">
                        </div>
                        <h3><a href="{{ route('register') }}">Gerenciador de Personagens</a></h3>
                        <p>Crie seu personagem favorito de RPG em instantes. Sem precisar consultar regras espalhadas
                            por vários capítulos. Sem errar na construção de valores da ficha. </p>
                    </li>
                    <li>
                        <div class="icon-holder">
                        </div>
                        <h3></h3>
                        <p></p>
                    </li>

                    <li>
                        <div class="icon-holder">
                            <img src="{{ asset('custom/img/campaign.png') }}" width="56" height="50"
                                alt="campanha" class="img-responsive">
                        </div>
                        <h3><a href="{{ route('register') }}">Gerenciador de Campanhas</a></h3>
                        <p>Tenha controle de suas campanhas de RPG e seus personagens. Gerencie o acesso às campanhas.
                            Veja as caracteríticas de cada personagem. </p>
                    </li>
                    <li>
                </ul>
                <!-- Features of the page end -->
            </section>
            <!-- Features area of the page end -->
            <!-- Product Features of the page -->
            <section class="container product-features" data-scroll-index="2">
                <div class="row sameheight-container">
                    <!-- Descr of the page -->
                    <div class="col-xs-12 col-sm-6 descr sameheight">
                        <div class="align">
                            <h2>Sem complexidade e desperdício de tempo para construir seu personagem.</h2>
                            <p style="color:#fff">Utilize o GEPE em qualquer computador ou celular, guardando sua ficha
                                em nuvem de forma
                                prática e segura. Ainda não tem personagem? Crie o seu rapidamente, escolhendo as opções
                                disponíveis no livro e organizadas de forma clara e centralizada. Acabe com as dúvidas,
                                tenha todas as características a seu alcance no momento da criação do personagem.</p>
                            <ul class="facts-list">
                                <li>
                                    <h3><span class="counter">98</span>+<span class="text-block">Personagens</span>
                                    </h3>
                                </li>
                                <li>
                                    <h3><span class="counter">10</span>+<span class="text-block">Campanhas</span></h3>
                                </li>
                                <li>
                                    <h3><span class="counter">64</span>+<span class="text-block">jogadores</span></h3>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Descr of the page end -->
                    <!-- img holder of the page -->
                    <div class="img-holder sameheight col-xs-12 col-sm-6">
                        <img src="{{ asset('custom/img/sheets.png') }}" alt="Fichas" class="img-responsive">
                    </div>
                    <!-- img holder of the page end -->
                </div>
            </section>
            <!-- Product Features of the page end -->
            <!-- Demo block of the page -->
            <aside class="demo-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-md-7">
                            <h2>Precisa de uma plataforma ágil e intuitiva para construir sua ficha de personagem ?</h2>
                            <p>Utilize o GEPE - Gerenciador de Personagens. Desenvolvido de fãs pra fãs, o GEPE é
                                gratuito e facilita a construção da ficha de seu personagem. Também pode gerenciar
                                campanhas para alegria de mestres e narradores.</p>
                        </div>
                        <div class="col-xs-12 col-md-5">
                            <ul>
                                <li><a href="{{ route('register') }}" class="btn btn-default btn-white">Cadastre-se
                                        agora</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
            <!-- Demo block of the page end -->
            <!-- Testimonials of the page -->
            <section class="testimonials text-center" data-scroll-index="3">
                <div class="container">
                    <div class="row">
                        <header class="col-xs-12 heading-wrap col-sm-6 col-sm-offset-3 text-center">
                            <h2 style="color:#fff">Veja as avaliações que os jogadores <br> e narradores fizeram sobre
                                o GEPE.
                            </h2>
                        </header>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <!-- Testimonials gallery of the page -->
                        <div class="testimonials-gallery">
                            <!-- Testimonials mask of the page -->
                            <div class="testimonials-mask">
                                <div class="testimonials-slide">
                                    <blockquote>
                                        <q>Adorei o sistema GEPE.<br> Fiz meu personagem rapidamente e sem complicação.
                                        </q>
                                        <cite>
                                            <strong class="name">Nicolas</strong>
                                            <span class="subtitle">Jogador de D&D</span>
                                        </cite>
                                    </blockquote>
                                </div>
                            </div>
                            <!-- Testimonials mask of the page end -->
                            <!-- Testimonials mask of the page -->
                            <div class="testimonials-mask">
                                <div class="testimonials-slide">
                                    <blockquote>
                                        <q>Sou mestre de RPG e sempre tive dificuldade em organizar os personagens de
                                            minha campanha<br> mas com GEPE, meus problemas acabaram </q>
                                        <cite>
                                            <strong class="name">Hian</strong>
                                            <span class="subtitle">Mestre de Chamado de Cthulhu</span>
                                        </cite>
                                    </blockquote>
                                </div>
                            </div>
                            <!-- Testimonials mask of the page end -->
                            <!-- Testimonials mask of the page -->
                            <div class="testimonials-mask">
                                <div class="testimonials-slide">
                                    <blockquote>
                                        <q>Com o GEPE consegui fazer vários personagens rapidamente e escolher qual
                                            melhor combo<br> agora vou detonar na próxima campanha </q>
                                        <cite>
                                            <strong class="name">José, o Combeiro</strong>
                                            <span class="subtitle">Jogador combeiro de Pathfinder</span>
                                        </cite>
                                    </blockquote>
                                </div>
                            </div>
                            <!-- Testimonials mask of the page end -->
                        </div>
                        <!-- Testimonials gallery of the page end -->
                    </div>
                </div>
                <aside class="container">
                    <div class="row">
                        <img src="{{ asset('custom/img/GepeLogo.png') }}" alt="image description" width="80"
                            height="80">
                    </div>
                    <div class="row">
                        <div
                            class="col-xs-12 heading-wrap btn-holder col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3 text-center">
                            <h2>GEPE é totalmente gratuito e fácil de utilizar, <span style="color:#ffffff">você pode
                                    construir sua ficha de personagem em instantes!</span></h2>
                            <a href="{{ route('register') }}" class="btn btn-default btn-white">Cadastre-se agora</a>
                        </div>
                    </div>
                </aside>
            </section>
            <!-- Testimonials of the page end -->
            <!-- Trial block of the page -->
        </main>
        <!-- Main of the page end -->
        <!-- Footer of the page -->
        <footer id="footer">
            <!-- Aside of the page -->
            <aside class="aside">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 text-center col-sm-6 col-sm-offset-3">
                            <div class="logo"><a href="#"><img src="{{ asset('custom/img/GEPELogo2.png') }}"
                                        alt="GEPE"></a>
                            </div>
                            <p>Sistema Gerenciador de Personagens</p>
                        </div>
                    </div>
                </div>
            </aside>
            <!-- Aside of the page end -->
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-4 col-sm-offset-4 text-center">
                        <p>&copy; Copyright 2017, <a href="#">Cooper.com</a>. <br>All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer of the page end -->
        <!-- Back Top of the page -->
        <span id="back-top" class="fa fa-angle-up"></span>
        {{-- <div id="loader" class="loader-holder">
            <div class="block"><img src="images/svg/hearts.svg" width="100" alt="loader"></div>
        </div> --}}
    </div>
    <!-- Wrapper of the page end -->
    <!-- include jQuery -->
    <script src="{{ asset('custom/js/jquery.js') }}"></script>
    <!-- include jQuery -->
    <script src="{{ asset('custom/js/plugins.js') }}"></script>
    <!-- include jQuery -->
    <script src="{{ asset('custom/js/jquery.main.js') }}"></script>
    <div id="style-changer" data-src="style-changer.html"></div>
</body>

</html>
