<?php

namespace App\Http\Controllers;

use App\Models\DietaAlimento;
use App\Models\Alimento;
use App\Models\Dieta;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class DietaAlimentoController extends Controller
{

    public function index()
    {
        return View('dietaalimento.index')->with('dietaAlimentos',DietaAlimento::all())->with('alimento',Alimento::all())->with('dieta',Dieta::all());
    }

    public function create(Request $request)
    {
        return View('dietaalimento.create')->with('alimento',Alimento::all())
        ->with('novaDieta',Dieta::find($request->dieta_id))
        ->with('dieta',Dieta::all());
    }

    public function store(Request $request)
    {
        $uniqueRule = Rule::unique('dieta_alimentos')->where(
            function ($query) use ($request){
                return $query->where('alimento_id',$request['alimento_id']??'')
                ->where('nm_dia_semana_dieta_alimentos',$request['dia']??'')
                ->where('nm_periodo_dieta_alimentos',$request['periodo']??'')
                ->where('dieta_id',$request['dieta_id']??'');
            });

        $validacao = $request->validate([
            'quantidade' => 'required|integer|digits_between:1,5',
            'periodo' => 'required|string|max:20',
            'dia' => 'required|alpha_dash|string|max:20',
            'alimento_id' => ['required','exists:alimentos,id',$uniqueRule],
            'dieta_id' => 'required|exists:dietas,id',
            'medida' => 'required|string|alpha'
        ]);

        DietaAlimento::create([
            'qt_dieta_alimentos' => $validacao['quantidade'],
            'nm_periodo_dieta_alimentos' => $validacao['periodo'],
            'nm_dia_semana_dieta_alimentos' => $validacao['dia'],
            'alimento_id' => $validacao['alimento_id'],
            'dieta_id' => $validacao['dieta_id'],
            'nm_unidade_alimentos' => $validacao['medida'],
        ]);

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
