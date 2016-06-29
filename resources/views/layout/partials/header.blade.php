<header>
    <div class="navbar-fixed">
        <nav class="light-blue lighten-1" role="navigation">
            <div class="nav-wrapper container">
                <div style="margin-left: 10px;">
                    <a id="logo-container" href="#" class="brand-logo">Lucas</a>
                </div>
                <ul class="right hide-on-med-and-down">
                    <li @if(Route::is('site.index')) class="active" @endif >
                        <a href="{{ route('site.index') }}">Sobre Mi</a>
                    </li>
                    <li @if(Route::is('site.resume')) class="active" @endif >
                        <a href="{{ route('site.resume') }}">Resumen</a>
                    </li>
                    <li>
                        <a href="#">Portafolio</a>
                    </li>
                    <li @if(Route::is('site.blog')) class="active" @endif >
                        <a href="{{ route('site.blog') }}">Blog</a>
                    </li>
                    <li @if(Route::is('site.contact')) class="active" @endif >
                        <a href="{{ route('site.contact') }}">Contacto</a>
                    </li>
                </ul>

                <ul id="nav-mobile" class="side-nav" style="transform: translateX(-100%);">
                    <li class="mobile-profile">
                        <div class="profile-inner">
                            <div class="pp-container">
                                <img src="https://avatars0.githubusercontent.com/u/16660388?v=3&s=460" alt="">
                            </div>
                            <h3>Pablo Lucas</h3>
                            <h5>Ingeniero en TIC</h5>
                        </div>
                    </li>
                    <li class="nav-li {{Route::is('site.index') ? 'active' : ''}}">
                        <a href="{{ route('site.index') }}">Sobre Mi</a>
                    </li>
                    <li class=" nav-li {{Route::is('site.resume') ? 'active' : ''}}" >
                        <a href="{{ route('site.resume') }}">Resumen</a>
                    </li>
                    <li class="nav-li">
                        <a href="#">Portafolio</a>
                    </li>
                    <li class="nav-li {{ Route::is('site.blog') ? 'active' : '' }}">
                        <a href="{{ route('site.blog') }}">Blog</a>
                    </li>
                    <li class="nav-li {{Route::is('site.contact') ? 'active' : ''}}">
                        <a href="{{ route('site.contact') }}">Contacto</a>
                    </li>
                </ul>
                <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="mdi mdi-menu"></i></a>
            </div>
        </nav>
    </div>

</header>