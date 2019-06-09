<?php

namespace App\Http\Controllers;

use App\Equipo;
use App\Evento;
use App\Localidad;
use App\Participante;
use Illuminate\Http\Request;

class ParticipantesController extends Controller
{
    public function index()
    {
        $participantes = Participante::with(['equipo'])->get();
        return view('/participantes.index', compact('participantes'));


    }

    public function create()
    {
        $participantes = Participante::all();
        $equipos=Equipo::all();
        $localidades=Localidad::all();
        $eventos=Evento::all();
        return view('/participantes.create', compact('participantes', 'equipos','localidades', 'eventos'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
        'nombre' => 'required|min:3|unique:participantes',
        'apellido'=>'required',
        'documento'=>'required|unique:participantes',
        'telefono'=>'required',
        'localidad_id'=>'required',
        'equipo_id'=>'required',
        'evento_id'=>'required'

        ]);
        $participante = Participante::create($request-> all());
        // Flash::success('el participante '.$participante->nombre.' ha sido creado')->important();
        return redirect()-> route('participantes.index');
    }

    public function show($id)
    {
        $participante = Participante::findOrFail($id);
        return view('/participantes.edit', compact('participante'));
    }

    public function edit($id)
    {
        $participante = Participante::findOrFail($id);
        $equipos = Equipo::findOrFail($id);
        $localidad = Localidad::findOrFail($id);
        $eventos = Evento::findOrFail($id);
        $localidades = Localidad::with(['localidad'])->get();
        return view('/participantes.show', compact('participante', 'equipos', 'localidades', 'localidad', 'eventos'));
    }

    public function update(Request $request, $id)
    {
        $participante = Participante::findOrfail($id);

        $participante->update($request->all());
        // Flash::warning('el participante '.$participante->nombre.' ha sido editado')-> important();
        return redirect()->route('participantes.index');
    }

    public function destroy($id)
    {
        $participante = Participante::findOrFail($id);
        $participante->delete();
        // Flash('Se ha eliminado '.$participante->nombre. ' de manera correcta')->error()->important();
        return redirect()->route('participantes.index');
    }
}
