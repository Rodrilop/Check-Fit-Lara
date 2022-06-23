<?php

namespace App\Http\Controllers;

use App\Models\Dieta;
use App\Models\DietaAlimento;
use App\Models\User;
use Illuminate\Http\Request;

class DietaController extends Controller
{
    public function index()
    {
        return View('dieta.index')->with('dietas',Dieta::all())->with('dietaalimento',DietaAlimento::all());
    }

    public function create()
    {
        return View('dieta.create');
    }

    public function store(Request $request)
    {
        $validacao = $request->validate([
            'nome' => 'required|string|alpha_num|unique:dietas,nm_dieta|max:150',
            'calorias' => 'required|integer|digits_between:1,5',
            'inicio' => 'required|date|before:termino',
            'termino' => 'required|date|after:inicio',
        ]);

        Dieta::create([
            'nm_dieta' => $validacao['nome'],
            'qt_caloria_dieta' => $validacao['calorias'],
            'dt_inicio_dieta' => $validacao['inicio'],
            'dt_termino_dieta' => $validacao['termino']
        ]);
        return DietaController::index();
    }

    public function show($id)
    {
        $dieta = Dieta::find($id);
        $refeicoes = $dieta->hasMany(DietaAlimento::class)->get();

        return View('dieta.show')->with('dietas',$dieta)->with('ref',$refeicoes);
    }

    public function edit(int $dietaId)
    {
        return View('dieta.edit')->with('dietas',Dieta::find($dietaId));
    }

    public function update(Request $request, int $dietaId)
    {
        $validacao = $request->validate([
            'nome' => 'required|string|alpha_num|unique:dietas,nm_dieta|max:150',
            'calorias' => 'required|integer|digits_between:1,5',
            'inicio' => 'required|date|before:termino',
            'termino' => 'required|date|after:inicio',
        ]);

        $dieta = Dieta::find($dietaId);
        
        $dieta->update([
            'nm_dieta' => $validacao['nome'],
            'qt_caloria_dieta' => $validacao['calorias'],
            'dt_inicio_dieta' => $validacao['inicio'],
            'dt_termino_dieta' => $validacao['termino']
        ]);

        return DietaController::index();
    }

    public function destroy(Dieta $dieta)
    {
        $dieta->delete();
        return DietaController::index();
    }
}
