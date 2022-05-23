<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alimento;

class AlimentoController extends Controller
{
    public function create(){
        return view('alimento.create');
    }
    public function store(Request $request){
        Alimento::create([
            'nm_alimento' => $request->nm_alimento,
            'ds_alimento' => $request->ds_alimento,
            'nm_categoria_alimento' => $request->nm_categoria_alimento,
        ]);
        return "Alimento salvo com sucesso";
    }
    public function show(){
        $alimentos = Alimento::all();
        return view('alimento.todos',['alimentos' => $alimentos]);
    }
    public function destroy($id){
        $alimento=Alimento::findOrFail($id);
        $alimento->delete();
        return "Alimento excluído com sucesso.";
    }
    public function edit($id){
        $alimento = Alimento::findOrFail($id);
        return view('alimento.editar', ['alimento' => $alimento]);
    }
    public function update(Request $request, $id){
        $alimento = Alimento::findOrFail($id);
        $alimento->update([
            'nm_alimento' => $request->nm_alimento,
            'ds_alimento' => $request->ds_alimento,
            'nm_categoria_alimento' => $request->nm_categoria_alimento,
        ]);
        return "Alimento atualizado com sucesso.";
    }
}