<div class="box-body table-responsive no-padding">
    <div class="box box-info">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>Evento donde se realiza la recolección</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($eventos as $evento)
                    <tr>
                        <td>{{ $evento->evento }}</td>
                        <td>
                            <a class="btn bg-blue btn-flat" href="{{ route('eventos.show', $evento->id) }}">
                                <span class="glyphicon glyphicon-pencil"></span>
                                Editar
                            </a>

                            <form style="display:inline" method="POST" action="{{ route ('eventos.destroy', $evento->id) }}">
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
    </div>
</div>
