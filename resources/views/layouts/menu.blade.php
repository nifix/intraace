<ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-folder fa-lg" style="color: #3582ff"></i> Dossiers
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('cus.showAll') }}">
                    <i class="fas fa-angle-right"></i> &nbsp; Tous les clients
            </a>
            @foreach ($teams as $team)
            <a class="dropdown-item" href="{{ route('cus.showByTeam', $team->id) }}">
                    <i class="fas fa-angle-right"></i> &nbsp; Portefeuille de {{ $team->name }}
            </a>
            @endforeach
        </div>
    </li>
</ul>
