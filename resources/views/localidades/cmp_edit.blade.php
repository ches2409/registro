<section class="content">
    <div class="box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">Editar esta localidad</h3>
        </div>

        <form method="POST" action="{{ route ('localidades.update', $localidad->id) }}" role="form">
            @method('PUT')
            @csrf
            <div class="box-body">

                <div class="form-group {{ $errors->has('localidad') ? 'has-error' : '' }}">
                    <label for="localidad">
                        Localidad o Barrio
                    </label>
                    <input type="text" name="localidad" id="localidad" class="form-control" placeholder=" ..." value="{{ $localidad->localidad }}">
                    {!! $errors->first('localidad', '<span class=help-block><i class="fa fa-times-circle-o"></i> :message</span>') !!}
                </div>

            </div>
            <div class="box-footer">
                <button type="submit" class="btn bg-blue btn-flat">
                    <span class="glyphicon glyphicon-ok"></span>
                    Guardar
                </button>

                <a class="btn bg-blue btn-flat" href="{{ route('localidades.index') }}">
                    <span class="glyphicon glyphicon-remove"></span>
                    Cancelar
                </a>

            </div>
        </form>
    </div>
</section>

