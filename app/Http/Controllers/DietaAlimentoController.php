<?php

namespace App\Http\Controllers;

use App\Models\DietaAlimento;
use App\Models\Alimento;
use App\Models\Dieta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DietaAlimentoController extends Controller
{

    public function index()
    {
        return View('dietaalimento.index')->with('dietaAlimentos',DietaAlimento::all())->with('alimento',Alimento::all())->with('dieta',Dieta::all());
    }

    public function create(Request $request)
    {
        return View('dietaalimento.create')->with('alimento',Alimento::all())->with('dieta',$request->dieta_id);
    }

    public function store(Request $request)
    {
        $validacao = $request->validate([
            'qt_dieta_alimentos' => 'required|numeric',
            'nm_periodo_dieta_alimentos' => 'required',
            'nm_dia_semana_dieta_alimentos' => 'required',
            'alimento_id' => 'required',
            'dieta_id' => 'required|exists:dieta_alimentos,dieta_id'
        ]);

        DietaAlimento::create($validacao);
        // DietaAlimento::create($request->all());
        return View('dietaalimento.index')->with('dietaAlimentos',DietaAlimento::all())->with('alimento',Alimento::all())->with('dieta',Dieta::all());
    }

    public function show(DietaAlimento $dietaAlimento)
    {
        return View('dietaalimento.show')->with('dietaAlimentos',$dietaAlimento);
    }

    public function edit(DietaAlimento $dietaAlimento)
    {
        return View('dietaalimento.edit')->with('dietaAlimentos',$dietaAlimento)->with('alimento',Alimento::all())->with('dieta',Dieta::all());
    }

    public function update(Request $request, DietaAlimento $dietaAlimento)
    {
        $dietaAlimento->update($request->all());
        return View('dietaalimento.index')->with('dietaAlimentos',DietaAlimento::all())->with('alimento',Alimento::all())->with('dieta',Dieta::all());
    }

    public function destroy(DietaAlimento $dietaAlimento)
    {
        $dietaAlimento->delete();
        return View('dietaalimento.index')->with('dietaAlimentos',DietaAlimento::all())->with('alimento',Alimento::all())->with('dieta',Dieta::all());
    }
}
