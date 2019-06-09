<section class="content">
    <div class="box box-info">

        <div class="box-header with-border">
            <h3 class="box-title">Crear un nuevo Cargo</h3>
        </div>


        <form method="POST" action="{{ route('eventos.store') }}" role="form">
            @csrf
            <div class="box-body">

                <div class="form-group {{ $errors->has('evento') ? 'has-error' : '' }}">
                    <label for="evento">
                        Evento donde se realiza la recolección
                    </label>
                    <input type="text" name="evento" id="evento" class="form-control" placeholder=" ..." value="{{ old('evento') }}">
                    {!! $errors->first('evento', '<span class=help-block><i class="fa fa-times-circle-o"></i> :message</span>') !!}
                </div>

            </div>
            <div class="box-footer">
                <button type="submit" class="btn bg-blue btn-flat">
                    <span class="glyphicon glyphicon-ok"></span>
                    Guardar
                </button>

                <a class="btn bg-blue btn-flat" href="{{ route('eventos.index') }}">
                    <span class="glyphicon glyphicon-remove"></span>
                    Cancelar
                </a>

            </div>
        </form>
    </div>
</section>

