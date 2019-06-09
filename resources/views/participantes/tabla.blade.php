<div class="box box-info no-padding">
        <div class="box-header">
            {{-- <h3 class="box-title"></h3> --}}
        </div>

        <div class="box-body no-padding">
            <div class="content box-group">
                @foreach ($participantes as $participante)
                    <div class="panel box box-success">
                        <div class="box-header with-border">
                            <h4 class="text-orange">
                                {{ $participante->nombre." ".$participante->apellido}}
                            </h4>
                        </div>
                        <div>
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="col-md-6">
                                            <div>
                                                Número de Documento: <span class="text-maroon">{{ $participante->documento }}</span>
                                            </div>
                                            <div>
                                                Profesión: <span class="text-blue">{{ $participante->profesion }}</span>
                                            </div>
                                        </div>

                                        <span class="btn bg-blue btn-flat">
                                            {{ $participante->localidad->localidad }}
                                        </span>

                                        <span class="btn bg-green btn-flat">
                                            {{ $participante->email }}
                                        </span>


                                        <span class="btn bg-aqua btn-flat">
                                            Rol:
                                            {{ $participante->equipo->equipo }}
                                        </span>

                                        <span class="btn bg-purple btn-flat">
                                            {{ $participante->evento->evento }}
                                        </span>
                                    </div>
                                    <div class="col-lg-4">
                                        <a class="btn bg-blue btn-flat" href="{{ route('participantes.show', $participante->id) }}">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                        Editar
                                    </a>

                                    <form style="display:inline" method="POST" action="{{ route('participantes.destroy', $participante->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn bg-blue btn-flat">
                                            <span class="glyphicon glyphicon-trash"></span>
                                            Eliminar
                                        </button>
                                    </form>
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
            <div class="container">
                {{-- {!! $participantes->links() !!} --}}
            </div>

        </div>

        {{-- <div class="box-body">
            <table class="table dt-responsive table-hover table-bordered tablas">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Documento</th>
                        <th>Teléfono</th>
                        <th>e-mail</th>
                        <th>Localidad</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Profesión</th>
                        <th>Rol</th>
                        <th>Evento</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($participantes as $participante)
                        <tr>
                            <td>{{ $participante->nombre }}</td>
                            <td>{{ $participante->apellido }}</td>
                            <td>{{ $participante->documento }}</td>
                            <td>{{ $participante->telefono }}</td>
                            <td>{{ $participante->email }}</td>
                            <td>{{ $participante->localidad->localidad }}</td>
                            <td>{{ $participante->fecNacimiento }}</td>
                            <td>{{ $participante->profesion }}</td>
                            <td>{{ $participante->equipo->equipo }}</td>
                            <td>{{ $participante->evento->evento }}</td>
                            <td>
                                <a class="btn bg-blue btn-flat" href="{{ route('participantes.show', $participante->id) }}">
                                    <span class="glyphicon glyphicon-pencil"></span>
                                    Editar
                                </a>

                                <form style="display:inline" method="POST" action="{{ route ('participantes.destroy', $participante->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn bg-blue btn-flat" onclick=""">
                                        <span class="glyphicon glyphicon-trash"></span>
                                        Eliminar
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $participantes->links() !!}
        </div> --}}
</div>



