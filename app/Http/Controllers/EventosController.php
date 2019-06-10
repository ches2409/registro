<?php

namespace App\Http\Controllers;

use App\Evento;
use Illuminate\Http\Request;

class EventosController extends Controller
{

    public function index()
    {
        $eventos = Evento::all();
        return view('/eventos.index', compact('eventos'));
    }

    public function create()
    {
        return view('/eventos.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
        'evento' => 'required|min:3|unique:eventos'
        ]);
        $evento = Evento::create($request-> all());
        // Flash::success('el evento '.$evento->evento.' ha sido creado')->important();
        return redirect()-> route('eventos.index');
    }

    public function show($id)
    {
        $evento = Evento::findOrFail($id);
        return view('/eventos.edit', compact('evento'));
    }

    public function edit($id)
    {
        $evento = Evento::findOrFail($id);
        return view('/eventos.show', compact('evento'));
    }

    public function update(Request $request, $id)
    {
        $evento = Evento::findOrfail($id);
        $evento->update($request->all());
        // Flash::warning('el evento '.$evento->nombre.' ha sido editado')-> important();
        return redirect()->route('eventos.index');
    }

    public function destroy( $id)
    {
        $evento = Evento::findOrFail($id);
        $evento->delete();
        // Flash('Se ha eliminado '.$evento->nombre. ' de manera correcta')->error()->important();
        return redirect()->route('eventos.index');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
}
