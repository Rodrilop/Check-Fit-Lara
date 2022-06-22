<?php

namespace App\Http\Controllers;

use App\Models\Treino;
use App\Models\TreinoExercicio;
use App\Models\Exercicio;
use Illuminate\Http\Request;

class TreinoController extends Controller
{
    public function index()
    {
        return View('treino.index')->with('treinos',Treino::all())->with('treinoexercicio',TreinoExercicio::all());
    }

    public function create()
    {
        return View('treino.create');
    }

    public function store(Request $request)
    {
        $validacao = $request->validate([
            'nome' => 'required|string|alpha_num|unique:treinos,nm_treino|max:150',
            'repeticao' => 'required|integer|digits_between:1,5',
            'carga' => 'required|integer|digits_between:1,5',
            'duracao' => 'required|integer',
        ]);

        Treino::create([
            'nm_treino' => $validacao['nome'],
            'qt_repeticao_exercicio' => $validacao['repeticao'],
            'qt_carga_exercicio' => $validacao['carga'],
            'hr_duracao_exercicio' => $validacao['duracao']
        ]);
        return View('treino.index')->with('treinos',Treino::all())->with('treinoexercicio',TreinoExercicio::all());
    }

    public function show(Treino $treino)
    {
        return View('treino.show')->with('treinos',$treino);
    }

    public function edit(Treino $treino)
    {
        return View('treino.edit')->with('treinos',$treino);
    }

    public function update(Request $request, Treino $treino)
    {
        $treino->update($request->all() );

    }

    public function destroy(Treino $treino)
    {
        $treino->delete();
        return View('treino.index')->with('treinos',Treino::all());
    }
}
