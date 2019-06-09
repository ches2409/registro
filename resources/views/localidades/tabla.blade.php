<div class="box-body table-responsive no-padding">
    <div class="box box-info">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Localidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($localidades as $localidad)
                    <tr>
                        <td>{{ $localidad->localidad }}</td>
                        <td>
                            <a class="btn bg-blue btn-flat" href="{{ route('localidades.show', $localidad->id) }}">
                                <span class="glyphicon glyphicon-pencil"></span>
                                Editar
                            </a>

                            <form style="display:inline" method="POST" action="{{ route ('localidades.destroy', $localidad->id) }}">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn bg-blue btn-flat" onclick="return confirm ('Una vez eliminado, no podrá ser recuperado')" >
                                    <span class="glyphicon glyphicon-trash"></span>
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="container">
            {!! $localidades->links() !!}
        </div>
    </div>
</div>
