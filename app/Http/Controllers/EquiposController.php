<?php

namespace App\Http\Controllers;

use App\Equipo;
use Illuminate\Http\Request;

class EquiposController extends Controller
{

    public function index()
    {
        $equipos = Equipo::all();
        return view('/equipos.index', compact('equipos'));
    }

    public function create()
    {
        return view('/equipos.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
        'equipo' => 'required|min:3|unique:equipos'
        ]);
        $equipo = Equipo::create($request-> all());
        // Flash::success('el equipo '.$equipo->equipo.' ha sido creado')->important();
        return redirect()-> route('equipos.index');
    }

    public function show($id)
    {
        $equipo = Equipo::findOrFail($id);
        return view('/equipos.edit', compact('equipo'));
    }

    public function edit($id)
    {
        $equipo = Equipo::findOrFail($id);
        return view('/equipos.show', compact('equipo'));
    }

    public function update(Request $request, $id)
    {
        $equipo = Equipo::findOrfail($id);
        $equipo->update($request->all());
        // Flash::warning('el equipo '.$equipo->nombre.' ha sido editado')-> important();
        return redirect()->route('equipos.index');
    }

    public function destroy($id)
    {
        $equipo = Equipo::findOrFail($id);
        $equipo->delete();
        Flash('Se ha eliminado '.$equipo->nombre. ' de manera correcta')->error()->important();
        return redirect()->route('equipos.index');
    }
}
