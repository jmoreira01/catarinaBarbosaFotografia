<nav class="navbar navbar-expand-lg bg-light shadow-sm mb-4" style="border-color: black;
    border-bottom: solid;
    border-width: 3px;
    box-shadow: 3px 3px black;">

    <div class="container">
        <a class="navbar-brand" href="{{url('/home')}}">Painel de Gestão</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav w-100">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('accesses') ? 'active' : '' }}" role="button" href="/accesses">Acessos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('services') ? 'active' : '' }}" role="button" href="/services">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('organizations/1') ? 'active' : '' }}" role="button"
                       href="/organizations/1">Empresa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('images') ? 'active' : '' }}" role="button"
                       href="/images">Imagens</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('videos') ? 'active' : '' }}" role="button"
                       href="/videos">Videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('testimonals') ? 'active' : '' }}" role="button"
                       href="/testimonals">Testemunhos</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="/"
                               onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>


        </div>
    </div>
</nav>
