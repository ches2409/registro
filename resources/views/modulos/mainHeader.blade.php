<header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini">
            <img src="/dist/img/mano.png" alt="" height="50px">
        </span>
        <!-- logo for regular state and mobile devices -->
        {{-- <span class="logo-lg"><b>SIS</b>Gestión</span> --}}
        <img src="/dist/img/logoB.png" alt="" height="50px">
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
        {{-- NOTE CONTENDORES PARA PERSONALIZAR NOTIFICACIONES
        +============================+
        |CONTENEDOR DE NOTIFICACIONES|
        |         "DROPDOWN"         |
        +============================+
        --}}
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="/dist/img/pactoB.png" class="user-image" alt="User Image">
                            {{-- <span class="hidden-xs">usuario: </span> --}}


                            @if (auth()->check())
                                <span class="hidden-xs">{{ auth()->user()->name }} </span>
                            @else
                                <span class="hidden-xs">Ingresar</span>
                            @endif
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="/dist/img/pacto.png" class="img-circle" alt="">
                            {{-- @if (auth()->guest())
                                <p>
                                    {{ auth()->user()->name }}
                                </p>
                            @endif --}}
                            @if (auth()->check())
                                <p>Formulario de registro</p>
                                <p></p>
                                <p class="label label-warning" >{{ auth()->user()->name }}</p>
                            @else
                                <p>inicia seción</p>

                            @endif
                            {{-- <p>
                                Nombre de usuario
                            </p> --}}
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            {{-- <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Perfíl</a>
                            </div> --}}
                            <div class="pull-right">
                                    {{-- <a href="{{ route('logout') }}" class="btn btn-default btn-flat">Cerar sesión</a> --}}

                                    {{-- @if (auth()->guest())
                                        <a href="/login">Login</a>
                                    @else
                                        <a href="/logout" class="btn btn-default btn-flat">Cerar sesión</a>
                                    @endif --}}
                                @guest
                                    {{-- <li class="nav-item"> --}}
                                        <a class="nav-link btn btn-success btn-flat" href="{{ route('login') }}">
                                            {{ __('Login') }}
                                        </a>
                                    {{-- </li> --}}
                                    @if (Route::has('register'))
                                        {{-- <li class="nav-item"> --}}
                                        <a class="nav-link btn btn-info btn-flat" href="{{ route('register') }}">
                                            {{ __('Register') }}
                                        </a>
                                        {{-- </li> --}}
                                    @endif
                                @else
                                    {{-- <li class="nav-item dropdown"> --}}
                                        {{-- <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a> --}}

                                        {{-- <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown"> --}}
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        {{-- </div> --}}
                                    {{-- </li> --}}
                                @endguest
                            </div>



                            {{-- <div  aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div> --}}

                        </li>
                    </ul>
                </li>
            </ul>

        </div>
    </nav>
</header>
