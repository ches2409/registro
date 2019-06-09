<?php

namespace App\Http\Controllers;

use App\Localidad;
use Illuminate\Http\Request;

class LocalidadesController extends Controller
{

    public function index()
    {
        // $localidades = Localidad::all();
        // return view('/localidades.index', compact('localidades'));

        $localidades = Localidad::orderBy('id', 'ASC')->paginate(6);
        return view('/localidades.index', compact('localidades'));

    }

    public function create()
    {
        return view('/localidades.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
        'localidad' => 'required|min:3|unique:localidades'
        ]);
        $localidad = Localidad::create($request-> all());
        // Flash::success('el localidad '.$localidad->localidad.' ha sido creado')->important();
        return redirect()-> route('localidades.index');
    }

    public function show($id)
    {
        $localidad = Localidad::findOrFail($id);
        return view('/localidades.edit', compact('localidad'));
    }

    public function edit($id)
    {
        $localidad = Localidad::findOrFail($id);
        return view('/localidades.show', compact('localidad'));
    }

    public function update(Request $request, $id)
    {
        $localidad = Localidad::findOrfail($id);
        $localidad->update($request->all());
        // Flash::warning('el localidad '.$localidad->nombre.' ha sido editado')-> important();
        return redirect()->route('localidades.index');
    }

    public function destroy($id)
    {
        $localidad = Localidad::findOrFail($id);
        $localidad->delete();
        // Flash('Se ha eliminado '.$localidad->nombre. ' de manera correcta')->error()->important();
        return redirect()->route('localidades.index');
    }
}
