<header>
    <div class="navbar-fixed">
        <nav class="light-blue lighten-1" role="navigation">
            <div class="nav-wrapper container">
                <div style="margin-left: 10px;">
                    <a id="logo-container" href="#" class="brand-logo">Lucas</a>
                </div>
                <ul class="right hide-on-med-and-down">
                    <li>
                        <a href="{{ route('site.index') }}">Sobre Mi</a>
                    </li>
                    <li>
                        <a href="{{ route('site.resume') }}">Resumen</a>
                    </li>
                    <li>
                        <a href="#">Portafolio</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="{{ route('site.contact') }}">Contacto</a>
                    </li>
                </ul>

                <ul id="nav-mobile" class="side-nav" style="transform: translateX(-100%);">
                    <li class="mobile-profile">
                        <div class="profile-inner">
                            <div class="pp-container">
                                <img src="https://avatars0.githubusercontent.com/u/16660388?v=3&s=460" alt="">
                            </div>
                            <h3>John Doe</h3>
                            <h5>Creative UI/UX Expert</h5>
                        </div>
                    </li>
                    <li class="nav-li">
                        <a href="#">Sobre Mi</a>
                    </li>
                    <li class="nav-li">
                        <a href="#">Resumen</a>
                    </li>
                    <li class="nav-li">
                        <a href="#">Portafolio</a>
                    </li>
                    <li class="nav-li">
                        <a href="#">Blog</a>
                    </li>
                    <li class="nav-li">
                        <a href="#">Contacto</a>
                    </li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi mdi-menu"></i></a>
            </div>
        </nav>
    </div>

</header>