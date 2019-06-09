<section class="content">
    <div class="box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">Crear un nuevo Participante</h3>
        </div>

        <form method="POST" action="{{ route('participantes.store') }}" role="form">
            @csrf
            <div class="box-body">
                <div class="row">
                    {{-- <div class="box-header">
                        <div class="box-title">
                            <h3 class="text-green">Información Básica</h3>
                        </div>
                    </div> --}}

                    <div class="box-body">
                        <div class="form-group col-md-6 {{ $errors->has('nombre') ? 'has-error' : '' }}">
                            <label for="nombre">
                                Nombre
                            </label>
                            <input type="text" name="nombre" class="form-control" placeholder=" ..." value="{{ old('nombre') }}">
                            {!! $errors->first('nombre', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                        </div>

                        <div class="form-group col-md-6 {{ $errors->has('apellido') ? 'has-error' : '' }}">
                            <label for="apellido">
                                Apellido
                            </label>
                            <input type="text" name="apellido" class="form-control" placeholder=" ..." value="{{ old('apellido') }}">
                            {!! $errors->first('apellido', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                        </div>


                        <div class="form-group col-md-4 {{ $errors->has('documento') ? 'has-error' : '' }}">
                            <label for="documento" class="control-label">
                                Identificación
                            </label>
                            <input type="text" name="documento" class="form-control" placeholder=" ..." value="{{ old('documento') }}">
                            {!! $errors->first('documento', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                        </div>

                        <div class="form-group col-md-4 {{ $errors->has('telefono') ? 'has-error' : '' }}">
                            <label for="telefono" class="control-label">
                                Teléfono
                            </label>
                            <input type="tel" name="telefono" class="form-control" placeholder=" ..." value="{{ old('telefono') }}">
                            {!! $errors->first('telefono', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                        </div>

                        <div class="form-group col-md-4">
                            <label for="direccion" class="control-label">
                                Dirección
                            </label>
                            <input type="text" name="direccion" class="form-control" placeholder=" ..." value="{{ old('direccion') }}">
                        </div>


                        <div class="form-group col-md-4">
                            <label for="email" class="control-label">
                                Correo Electronico
                            </label>
                            <input type="email" name="email" class="form-control" placeholder=" ..." value="{{ old('email') }}">
                        </div>

                        <div class="form-group col-md-4 {{ $errors->has('localidad_id') ? 'has-error' : '' }}">
                            <label for="localidad_id" class="control-label">
                                localidad
                            </label>

                            <select class="form-control select2" name="localidad_id">
                                    <option selected></option>
                                @foreach ($localidades as $localidad)
                                    <option value="{{ $localidad->id }}">{{ $localidad->localidad }}</option>
                                @endforeach
                            </select>
                            {!! $errors->first('localidad_id', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                        </div>

                        <div class="form-group col-md-4">
                            <label for="sexo" class="control-label">
                                Sexo
                            </label>
                            <select class="form-control custom-select" name="sexo">
                                <option value="0" selected>No Responde</option>
                                <option value="1">Masculino</option>
                                <option value="2">Femenino</option>
                            </select>
                        </div>


                        <div class="form-group col-md-4">
                            <label for="fechaNacimiento" class="control-label">
                                Fecha de Nacimiento
                            </label>
                            <input type="date" name="fechaNacimiento" class="form-control" placeholder=" ..." value="{{ old('fechaNacimiento') }}">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="profesion" class="control-label">
                                Profesión
                            </label>
                            <input type="text" name="profesion" class="form-control" placeholder=" ..." value="{{ old('profesion') }}">
                        </div>

                        <div class="form-group col-md-4 {{ $errors->has('equipo_id') ? 'has-error' : '' }}">
                            <label for="equipo_id" class="control-label">
                                Equipos de trabajo // rol de campaña
                            </label>
                            <select class="form-control select2" name="equipo_id">
                                    <option selected></option>
                                @foreach ($equipos as $equipo)
                                    <option value="{{ $equipo->id }}">{{ $equipo->equipo }}</option>
                                @endforeach
                            </select>
                            {!! $errors->first('equipo_id', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                        </div>

                        <div class="form-group col-md-4 {{ $errors->has('evento_id') ? 'has-error' : '' }}">
                            <label for="evento_id" class="control-label">
                                Evento de recolección
                            </label>
                            <select class="form-control select2" name="evento_id">
                                    <option selected></option>
                                @foreach ($eventos as $evento)
                                    <option value="{{ $evento->id }}">{{ $evento->evento }}</option>
                                @endforeach
                            </select>
                            {!! $errors->first('evento_id', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                        </div>

                    </div>

                </div>



            </div>
            <div class="box-footer">
                <button type="submit" class="btn bg-blue btn-flat">
                    <span class="glyphicon glyphicon-ok"></span>
                    Guardar
                </button>

                <a class="btn bg-blue btn-flat" href="{{ route('participantes.index') }}">
                    <span class="glyphicon glyphicon-remove"></span>
                    Cancelar
                </a>

            </div>
        </form>
    </div>
</section>
