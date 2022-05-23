<?php

namespace App\Http\Controllers;

use App\Models\Exercicio;
use Illuminate\Http\Request;

class ExercicioController extends Controller
{
    public function index()
    {
        return View('exercicio.index')->with('dados',Exercicio::all());
    }

    public function create()
    {
        return View('exercicio.create');
    }

    public function store(Request $request)
    {
        Exercicio::create($request->all());
        return View('exercicio.index')->with('dados',Exercicio::all());
    }

    public function show(Exercicio $exercicio)
    {
        return View('exercicio.show')->with('dados',$exercicio);
    }

    public function edit(Exercicio $exercicio)
    {
        return View('exercicio.edit')->with('dados',$exercicio);
    }

    public function update(Request $request, Exercicio $exercicio)
    {
        $exercicio->update( $request->all() );

    }

    public function destroy(Exercicio $exercicio)
    {
        $exercicio->delete();
        return View('exercicio.index')->with('dados',Exercicio::all());
    }
}
