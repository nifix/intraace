<ul class="navbar-nav mr-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <ion-item>
                <ion-icon class="icon" name="folder"></ion-icon>
                <span class="icontext">Dossiers</span>
            </ion-item>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('cus.showAll') }}">
                <ion-item>
                    <ion-icon class="icon" name="more"></ion-icon>
                    <span class="icontext">Afficher tous les clients</span>
                </ion-item>
            </a>
            @foreach ($teams as $team)
            <a class="dropdown-item" href="{{ route('cus.showByTeam', $team->id) }}">
                <ion-item>
                    <ion-icon class="icon" name="more"></ion-icon>
                    <span class="icontext">Dossiers de {{ $team->name }}</span>
                </ion-item>
            </a>
            @endforeach
        </div>
    </li>
</ul>
