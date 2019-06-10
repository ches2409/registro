<?php function activeMenu($url){
    return request()->is($url) ? 'active': '';
}?>

<ul class="sidebar-menu" data-widget="tree">
    <li class="header">#EsPorPitalito</li>
{{-- STUB Item de Menú
+======================+
|ELEMENTO 1=> DASHBOARD|
|      "TREEVIEW"      |
+======================+
--}}
    <li class="{{ activeMenu('/') }}">
        <a href="{{ route('home') }}">
            <i class="fa fa-home"></i> <span>Inicio</span>
        </a>
    </li>

    {{-- STUB Item de Menú
+=======================+
|ELEMENTO 2=> participantes|
|     "TREEVIEW"       |
+======================+
--}}

    @if (auth()->check())
        <li class="{{ request()->is('participantes', 'participantes/*' ) ? 'active' : '' }}">
            <a href="{{ route('participantes.index') }}">
                <i class="fa fa-id-card"></i>
                <span>Participantes</span>
            </a>
        </li>
    @endif
    {{-- <li class="{{ request()->is('participantes', 'participantes/*' ) ? 'active' : '' }}">
        <a href="{{ route('participantes.index') }}">
            <i class="fa fa-id-card"></i>
            <span>Participantes</span>
        </a>
    </li> --}}
{{-- STUB Item de Menú
+=======================+
|ELEMENTO 2=> empleados|
|     "TREEVIEW"       |
+======================+
--}}
    @if (auth()->check())
        <li class="{{ request()->is('eventos', 'eventos/*' ) ? 'active' : '' }}">
            <a href="{{ route('eventos.index') }}">
                <i class="fa fa-bank"></i>
                <span>Eventos</span>
            </a>
        </li>
    @endif
    {{-- <li class="{{ request()->is('eventos', 'eventos/*' ) ? 'active' : '' }}">
        <a href="{{ route('eventos.index') }}">
            <i class="fa fa-bank"></i>
            <span>Eventos</span>
        </a>
    </li> --}}

{{-- STUB Item de Menú
+=====================+
|ELEMENTO 3=> CLIENTES|
|     "TREEVIEW"      |
+=====================+
--}}
    @if (auth()->check())
        <li class="{{ request()->is('localidades', 'localidades/*' ) ? 'active' : '' }}">
        <a href="{{ route ('localidades.index') }}">
            <i class="fa fa-street-view"></i>
            <span>Localidades</span>
        </a>
    </li>
    @endif

{{-- STUB Item de Menú
+======================+
|ELEMENTO 4=> equipos|
|     "TREEVIEW"       |
+======================+
--}}
    @if (auth()->check())
        <li class="{{ request()->is('equipos', 'equipos/*') ? 'active' : '' }}">
        <a href="{{ route ('equipos.index') }}">
            <i class="fa fa-puzzle-piece"></i>
            <span>Roles</span>
        </a>
    </li>
    @endif
    {{-- <li class="{{ request()->is('equipos', 'equipos/*') ? 'active' : '' }}">
        <a href="{{ route ('equipos.index') }}">
            <i class="fa fa-puzzle-piece"></i>
            <span>Roles</span>
        </a>
    </li> --}}

    @if (auth()->check())

    @else
        <li class="">
        <a href="{{ route ('login') }}">
            <i class="fa fa-sign-in"></i>
            <span>Iniciar sesión</span>
        </a>
    </li>
    @endif

    {{-- <li class="">
        <a href="{{ route ('login') }}">
            <i class="fa fa-sign-in"></i>
            <span>Iniciar sesión</span>
        </a>
    </li> --}}
</ul>
