<div class="box-body table-responsive no-padding">
    <div class="box box-info">
        <table class="table table-hover table-bordered">
            <thead>
                <tr>
                    <th>equipos // roles de campaña</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($equipos as $equipo)
                    <tr>
                        <td>{{ $equipo->equipo }}</td>
                        <td>{{ $equipo->descripcion }}</td>
                        <td>
                            <a class="btn bg-blue btn-flat" href="{{ route('equipos.show', $equipo->id) }}">
                                <span class="glyphicon glyphicon-pencil"></span>
                                Editar
                            </a>

                            <form style="display:inline" method="POST" action="{{ route ('equipos.destroy', $equipo->id) }}">
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
