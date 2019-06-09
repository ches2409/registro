<section class="content">
    <div class="box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">Crear un nuevo equipo o rol de campaña</h3>
        </div>


        <form method="POST" action="{{ route('equipos.store') }}" role="form">
            @csrf
            <div class="box-body">

                <div class="form-group {{ $errors->has('equipo') ? 'has-error' : '' }}">
                    <label for="equipo">
                        Equipo de trabajo o rol de campaña
                    </label>
                    <input type="text" name="equipo" id="equipo" class="form-control" placeholder=" ..." value="{{ old('equipo') }}">
                    {!! $errors->first('equipo', '<span class=help-block><i class="fa fa-times-circle-o"></i> :message</span>') !!}
                </div>

                <!-- textarea -->
                <div class="form-group">
                    <label for="descripcion">
                        Descripción
                    </label>
                    <textarea name="descripcion" class="form-control" rows="3" placeholder=" ..." >{{ old('descripcion') }}</textarea>
                </div>

            </div>
            <div class="box-footer">
                <button type="submit" class="btn bg-blue btn-flat">
                    <span class="glyphicon glyphicon-ok"></span>
                    Guardar
                </button>

                <a class="btn bg-blue btn-flat" href="{{ route('equipos.index') }}">
                    <span class="glyphicon glyphicon-remove"></span>
                    Cancelar
                </a>

            </div>
        </form>
    </div>
</section>

