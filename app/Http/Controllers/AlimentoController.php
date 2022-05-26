<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alimento;
use App\Http\Requests\StoreAlimentoRequest;
use App\Http\Requests\UpdateAlimentoRequest;

class AlimentoController extends Controller
{
    public function index()
    {
        $alimento = Alimento::all();

        return view('alimento.index', compact('alimento'));
    }

    public function create()
    {
        return View('alimento.create');
    }

    public function store(StoreAlimentoRequest $request)
    {
        Alimento::create($request->all());
        return redirect()->route('alimento.index');
    }

    public function show(Alimento $alimento)
    {
        return view('alimento.show', compact('alimento'));
    }

    public function edit(Alimento $alimento)
    {
        return view('alimento.edit', compact('alimento'));
    }

    public function update(UpdateAlimentoRequest $request, Alimento $alimento)
    {
        $alimento->update($request->all());
        return redirect()->route('alimento.index');
    }

    public function destroy(Alimento $alimento)
    {
        $alimento->delete();
        return redirect()->route('alimento.index');
    }
}