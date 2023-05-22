<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <a href="{{ route('character.list') }}" class="navbar-brand">
            <img src="{{ asset('adminlte/img/GEPELogo.png') }}" alt="GEPE Logo" class="brand-image img-circle elevation-3"
                style="opacity: .8">
            <span class="brand-text font-weight-light">GEPE</span>
        </a>

        <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="{{ route('character.list') }}" class="nav-link">Início</a>
                </li>
                <li class="nav-item dropdown">
                    <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-toggle">Listas</a>
                    <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                        <li><a href="{{ route('character.list') }}" class="dropdown-item">Personagens </a></li>
                        <li><a href="{{ route('player.list') }}" class="dropdown-item">Jogadores</a></li>
                        <li><a href="{{ route('race.list') }}" class="dropdown-item">Ascendências</a></li>
                        <li><a href="{{ route('profession.list') }}" class="dropdown-item">Profissões</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">Sair</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
