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
        $validacao = $request->validate([
            'alimento' => 'required|string|alpha|unique:alimentos,nm_alimento|max:150',
            'descricao' => 'required|string|alpha|max:250',
            'categoria' => 'required|string|alpha|max:200'
        ]);

        Alimento::create([
            'nm_alimento' => $validacao['alimento'],
            'ds_alimento' => $validacao['descricao'],
            'nm_categoria_alimento' => $validacao['categoria'],
        ]);
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