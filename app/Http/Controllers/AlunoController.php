<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class AlunoController extends Controller
{

    public function index()
    {
        return view('aluno.index')->with('alunos',User::where('nm_categoria_usuario','=','Aluno')->get());
    }

    public function create()
    {
        return view('aluno.create');
    }

    public function store(Request $request)
    {
        
        $validacao = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'categoria' => ['required','string'],
            'cpf' => 'required|numeric|unique:users,nm_cpf_aluno',
            'professor_id' => 'required|exists:users,id'
        ]);
    
        User::create([
            'name' => $validacao['name'],
            'email' => $validacao['email'],
            'password' => Hash::make($request['cpf']),
            'nm_categoria_usuario'=>$validacao['categoria'],
            'nm_cpf_aluno'=>$validacao['cpf'],
            'professor_id'=>$validacao['professor_id']
        ]);

        return AlunoController::index();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
