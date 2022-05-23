<?php

namespace App\Http\Controllers;

use App\Models\Treino;
use Illuminate\Http\Request;

class TreinoController extends Controller
{
    public function index()
    {
        return View('treino.index')->with('dados',Treino::all());
    }

    public function create()
    {
        return View('treino.create');
    }

    public function store(Request $request)
    {
        Treino::create($request->all());
        return View('treino.index')->with('dados',Treino::all());
    }

    public function show(Treino $treino)
    {
        return View('treino.show')->with('dados',$treino);
    }

    public function edit(Treino $treino)
    {
        return View('treino.edit')->with('dados',$treino);
    }

    public function update(Request $request, Treino $treino)
    {
        $treino->update( $request->all() );

    }

    public function destroy(Treino $treino)
    {
        $treino->delete();
        return View('treino.index')->with('dados',Treino::all());
    }
}
