<?php

namespace App\Http\Controllers;

use App\Models\DietaAlimento;
use App\Models\Alimento;
use App\Models\Dieta;
use Illuminate\Http\Request;

class DietaAlimentoController extends Controller
{

    public function index()
    {
        return View('dietaalimento.index')->with('dados',DietaAlimento::all())->with('alimento',Alimento::all())->with('dieta',Dieta::all());
    }

    public function create()
    {
        return View('dietaalimento.create')->with('alimento',Alimento::all())->with('dieta',Dieta::all());
    }


    public function store(Request $request)
    {
        DietaAlimento::create($request->all());
        return View('dietaalimento.index')->with('dados',DietaAlimento::all())->with('alimento',Alimento::all())->with('dieta',Dieta::all());
    }

    public function show(DietaAlimento $dietaAlimento)
    {
        return View('dietaalimento.show')->with('dados',$dietaAlimento);
    }

    public function edit(DietaAlimento $dietaAlimento)
    {
        return View('dietaalimento.edit')->with('dados',$dietaAlimento)->with('alimento',Alimento::all())->with('dieta',Dieta::all());
    }

    public function update(Request $request, DietaAlimento $dietaAlimento)
    {
        $dietaAlimento->update($request->all());
        return View('dietaalimento.index')->with('dados',DietaAlimento::all())->with('alimento',Alimento::all())->with('dieta',Dieta::all());
    }

    public function destroy(DietaAlimento $dietaAlimento)
    {
        $dietaAlimento->delete();
        return View('dietaalimento.index')->with('dados',DietaAlimento::all())->with('alimento',Alimento::all())->with('dieta',Dieta::all());
    }
}
