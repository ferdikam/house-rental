<nav class="navbar ">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="{{ url('/') }}">
                {{ config('app.name', 'Laravel') }}
            </a>

            <div class="navbar-burger burger" data-target="navMenu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div><!-- navbar-brand -->

        <div id="navMenu" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item " href="{{ url('/') }}">
                    <span class="icon"><i class="fa fa-tachometer" aria-hidden="true"></i></span>
                    Tableau de bord
                </a>
                <a class="navbar-item " href="{{ route('logement.index') }}">
                    <span class="icon"><i class="fa fa-building" aria-hidden="true"></i></span>
                    Logements
                </a>
                <a class="navbar-item " href="http://bulma.io/love/">
                    <span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>
                    Locataires
                </a>
            </div><!-- navbar-start -->

            <div class="navbar-end">
                @guest
                    <a class="navbar-item" href="{{ route('login') }}">Connexion</a>
                @else
                    <div class="navbar-item has-dropdown is-hoverable">
                        <a class="navbar-link" href="#">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="navbar-dropdown">
                            <a href="#" class="navbar-item">
                                <span class="icon"><i class="fa fa-user-circle-o"></i></span>
                                Profile
                            </a>
                            <hr class="navbar-divider">
                            <a href="{{ route('logout') }}" class="navbar-item" onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                <span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
                                Déconnexion
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </div>
                    </div>
                @endif
            </div><!-- navbar-end -->
        </div><!-- navbar-menu -->
    </div><!-- container -->
</nav>