<nav>
    <div class="container nav__container">
        <a href="/" class="nav_logo">
            <img src="{{ asset('storage/'.$organizations->logo) }}" alt="Logo">
        </a>
        <ul class="nav__links">
            <li><a href="/">Home</a></li>
            <li><a href="#about">Sobre Mim</a></li>
            <li><a href="#services">Serviços</a></li>
            <li><a href="#gallery">Galeria</a></li>
            <li><a href="#contacto">Contacto</a></li>
        </ul>
        <!-- Social Medias -->
        <ul class="nav__socials">
            <li><a href="{{ route('login') }}"><i class="uil uil-envelope-upload-alt"></i></a></li>
        </ul>
        <!-- Design avaiable for mobiles and tablets only -->
        <button class="nav__toggle-btn" id="nav__toogle-open"><i class="uil uil-bars"></i></button>
        <button class="nav__toggle-btn" id="nav__toogle-close"><i class="uil uil-times-circle"></i></button>
    </div>
</nav>
