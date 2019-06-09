<section class="content">
    <div class="box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">No se permite Editar datos</h3>
        </div>

        {{-- <form method="POST" action="{{ route ('participantes.update', $participante->id) }}" role="form">
            @method('PUT')
            @csrf
            <div class="box-body">
                <div class="row">

                    <div class="box-body">
                        <div class="form-group col-md-6 {{ $errors->has('nombre') ? 'has-error' : '' }}">
                            <label for="nombre">
                                Nombre
                            </label>
                            <input type="text" name="nombre" class="form-control" placeholder=" ..." value="{{ $participante->nombre }}">
                            {!! $errors->first('nombre', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                        </div>

                        <div class="form-group col-md-6 {{ $errors->has('apellido') ? 'has-error' : '' }}">
                            <label for="apellido">
                                Apellido
                            </label>
                            <input type="text" name="apellido" class="form-control" placeholder=" ..." value="{{ $participante->apellido }}">
                            {!! $errors->first('apellido', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                        </div>


                        <div class="form-group col-md-4 {{ $errors->has('documento') ? 'has-error' : '' }}">
                            <label for="documento" class="control-label">
                                Identificación
                            </label>
                            <input type="text" name="documento" class="form-control" placeholder=" ..." value="{{ $participante->documento }}">
                            {!! $errors->first('documento', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                        </div>

                        <div class="form-group col-md-4 {{ $errors->has('telefono') ? 'has-error' : '' }}">
                            <label for="telefono" class="control-label">
                                Teléfono
                            </label>
                            <input type="tel" name="telefono" class="form-control" placeholder=" ..." value="{{ $participante->telefono }}">
                            {!! $errors->first('telefono', '<span class=text-danger><i class="fa fa-times-circle-o"></i>:message</span>') !!}
                        </div>

                        <div class="form-group col-md-4">
                            <label for="direccion" class="control-label">
                                Dirección
                            </label>
                            <input type="text" name="direccion" class="form-control" placeholder=" ..." value="{{ $participante->direccion }}">
                        </div>


                        <div class="form-group col-md-4">
                            <label for="email" class="control-label">
                                Correo Electronico
                            </label>
                            <input type="email" name="email" class="form-control" placeholder=" ..." value="{{ $participante->email }}">
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
                            <input type="text" name="fechaNacimiento" class="form-control datepicker datemask3" placeholder=" ..." value="{{ $participante->fecNacimiento }}">
                        </div>

                        <div class="form-group col-md-4">
                            <label for="profesion" class="control-label">
                                Profesión
                            </label>
                            <input type="text" name="profesion" class="form-control" placeholder=" ..." value="{{ $participante->profesion }}">
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
        </form> --}}
    </div>
</section>
