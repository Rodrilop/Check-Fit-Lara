<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AlunoController extends Controller
{

    public function index()
    {
        return view('profile');
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
            'cpf' => 'nullable|numeric|unique:users,nm_cpf_aluno'
        ]);
    
        User::create([
            'name' => $validacao['name'],
            'email' => $validacao['email'],
            'password' => Hash::make($request['cpf']),
            'nm_categoria_usuario'=>$validacao['categoria'],
            'nm_cpf_aluno'=>$validacao['cpf']
    ]);

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
