<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
        <a href="#" class="navbar-brand">
            <img src="{{ asset('custom/img/GEPELogo.png') }}" alt="GEPE Logo" class="brand-image img-circle elevation-3"
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
                    <a href="{{ route('manager.character.list') }}" class="nav-link">Início</a>
                </li>
                @role('admin')
                <li class="nav-item"><a href="{{ route('admin.character.list') }}" class="nav-link">Personagens </a></li>
                <li class="nav-item"><a href="{{ route('admin.campaign.list') }}" class="nav-link">Campanhas</a></li>
                <li class="nav-item"><a href="{{ route('admin.race.list') }}" class="nav-link">Ascendências</a></li>
                <li class="nav-item"><a href="{{ route('admin.profession.list') }}" class="nav-link">Profissões</a></li>
                <li class="nav-item"><a href="{{ route('admin.user.list') }}" class="nav-link">Jogadores</a></li>
                @else
                    <li class="nav-item">
                        <a href="{{ route('manager.character.list') }}" class="nav-link">Meus Personagens</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('manager.campaign.list') }}" class="nav-link">Minhas Campanhas</a>
                    </li>
                @endrole
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link">Sair</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
