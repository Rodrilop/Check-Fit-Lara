<?php

namespace App\Http\Controllers;

use App\Models\Dieta;
use App\Models\DietaAlimento;
use App\Models\Alimento;
use Illuminate\Http\Request;

class DietaController extends Controller
{
    public function index()
    {
        return View('dieta.index')->with('dados',Dieta::all())->with('dietaalimento',DietaAlimento::all());
    }

    public function create()
    {
        return View('dieta.create');
    }

    public function store(Request $request)
    {
        Dieta::create($request->all());
        return View('dieta.index')->with('dados',Dieta::all())->with('dietaalimento',DietaAlimento::all());
    }

    public function show(Dieta $dieta)
    {
        return View('dieta.show')->with('dados',$dieta);
    }

    public function edit(Dieta $dieta)
    {
        return View('dieta.edit')->with('dados',$dieta);
    }

    public function update(Request $request, Dieta $dieta)
    {
        $dieta->update( $request->all() );

    }

    public function destroy(Dieta $dieta)
    {
        $dieta->delete();
        return View('dieta.index')->with('dados',Dieta::all());
    }
}
