@extends('layouts.master')

@section('title', 'Registro')

@section('tablas')
    @include('/participantes.tabla')
@endsection

{{-- SECTION  Secciones internas
+==========================================================+
|                      SECCIÓN DONDE                       |
|SE INLUYE EL CONTENIDO AUXILIAR PARA EL USO DE LAS PÁGINAS|
|                   "SECCIONES INTERNAS"                   |
+==========================================================+
--}}

    @section('itemSide')
        @include('/components/items_side')
    @endsection

    @section('content')
        <div class="content">

            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-4">
                        <h1>
                            <i class="fa fa-id-card"></i>
                            participantes
                        </h1>
                    </div>
                    {{-- <div class="col-lg-3">
                        <div><br></div>
                        <div class="input-group input-group-sm" style="width: 200px;">
                            <input type="text" name="table_search" class="form-control pull-right" placeholder="Buscar">

                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                        <div><br></div>
                    </div> --}}
                    <div class="col-lg-5">
                        {{-- @include('flash::message') --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="box-header">
                        <h3 class="box-title">Crear, editar o eliminar</h3>
                        <div class="box-tools">
                            <a class="btn bg-blue btn-flat" href="{{ route('participantes.create') }}">
                                <span class="glyphicon glyphicon-file"></span>
                                Nuevo
                            </a>
                            <a class="btn bg-blue btn-flat" href="/">
                                <span class="glyphicon glyphicon-remove"></span>
                                Salir
                            </a>
                        </div>
                        <div><p></p></div>
                    </div>
                    @yield('tablas')
                </div>
            </div>
        </div>
    @endsection


{{-- SECTION  Sección de Modulos
+==========================================================+
|                      SECCIÓN DONDE                       |
|SE INCLUYEN LAS VISTAS O MODULOS QUE COMPONEN EL PRINCIPAL|
|                    SECCIÓN DE MODULOS                    |
+==========================================================+
--}}

    @section('mainHeader')
        @include('/modulos/mainHeader')
    @endsection

    @section('mainSidebar')
        @include('/modulos/mainSidebar')
    @endsection

    {{-- NOTE gestion del contenido
    +=================================+
    |CONTENEDOR INTERNO PARA EL USO DE|
    |      INGRESO DE CONTENIDO       |
    +=================================+
    --}}

        @section('contentWrapper')
            <div class="content-wrapper">
            <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Localidad // Barrio
                        <small>Administrar</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i>#EsPorPitalito</a></li>
                        <li class="active">participantes</li>
                    </ol>
                </section>
                <!-- Main content -->
                @yield('content')
            </div>
        @endsection

    @section('mainFooter')
        @include('/modulos/mainFooter')
    @endsection













