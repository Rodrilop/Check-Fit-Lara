<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exercicio;
use App\Http\Requests\StoreExercicioRequest;
use App\Http\Requests\UpdateExercicioRequest;

class ExercicioController extends Controller
{
    public function index()
    {
        $exercicio = Exercicio::all();

        return view('exercicio.index', compact('exercicio'));
    }

    public function create()
    {
        return View('exercicio.create');
    }

    public function store(StoreExercicioRequest $request)
    {
        Exercicio::create($request->all());
        return redirect()->route('exercicio.index');
    }

    public function show(Exercicio $exercicio)
    {
        return view('exercicio.show', compact('exercicio'));
    }

    public function edit(Exercicio $exercicio)
    {
        return view('exercicio.edit', compact('exercicio'));
    }

    public function update(UpdateExercicioRequest $request, Exercicio $exercicio)
    {
        $exercicio->update($request->all());
        return redirect()->route('exercicio.index');
    }

    public function destroy(Exercicio $exercicio)
    {
        $exercicio->delete();
        return redirect()->route('exercicio.index');
    }
}