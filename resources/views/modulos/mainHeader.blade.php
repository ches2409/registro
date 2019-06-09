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
                        <span class="hidden-xs">usuario</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="/dist/img/pacto.png" class="img-circle" alt="User Image">
                            <p>
                            usuario
                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            {{-- <div class="pull-left">
                                <a href="#" class="btn btn-default btn-flat">Perfíl</a>
                            </div> --}}
                            <div class="pull-right">
                                <a href="/logout" class="btn btn-default btn-flat">Cerar sesión</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
