<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/dist/img/pactoB.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Registro de Asistencia</p>
                <a href="http://esporpitalito.com/" target="blank">#EsPorPitalito</a>
            </div>
        </div>
{{-- NOTE Activar el componente de busqueda
+====================================================+
|ACTIVA EL COMPONENTE DE BUSQUEDA EN LA BARRA LATERAL|
|                   "SEARCH FORM"                    |
+====================================================+
--}}
        <!-- search form -->
        {{-- <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
            <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form> --}}
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
{{-- NOTE Integración de Items al Sidebar
+=========================================================+
|SE HACE LA INTEGRACIÓN DE LOS ITEMS PARA LA BARRA LATERAL|
|                     "SIDEBAR-MENU"                      |
+=========================================================+
--}}
        @yield('itemSide')
    </section>
    <!-- /.sidebar -->
</aside>
