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
        return View('dieta.index')->with('dietas',Dieta::all())->with('dietaalimento',DietaAlimento::all());
    }

    public function show(Dieta $dieta)
    {
        return View('dieta.show')->with('dietas',$dieta);
    }

    public function edit(Dieta $dieta)
    {
        return View('dieta.edit')->with('dietas',$dieta);
    }

    public function update(Request $request, Dieta $dieta)
    {
        $dieta->update( $request->all() );
    }

    public function destroy(Dieta $dieta)
    {
        $dieta->delete();
        return View('dieta.index')->with('dietas',Dieta::all());
    }

    public function vinculaDietaUser(Dieta $dieta, User $user){
        $dieta->users()->attach($user);
    }
}
