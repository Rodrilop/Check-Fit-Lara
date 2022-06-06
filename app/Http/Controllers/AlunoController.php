<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Dieta;
use App\Models\Treino;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\StoreAlunoRequest;
use App\Http\Requests\UpdateAlunoRequest;

class AlunoController extends Controller
{

    public function index()
    {
        $user = Auth::id();
        return view('aluno.index')->with('alunos',User::where(
            'nm_categoria_usuario','=','Aluno')->get()->where('professor_id','=',$user))
            ->with('dietas',Dieta::all())->with('treinos',Treino::all());
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
            'password' => Hash::make($validacao['cpf']),
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

    public function edit($user)
    {
        $aluno = User::find($user);
        return view('aluno.edit')->with('aluno',$aluno)
                                 ->with('dietas',Dieta::all())
                                 ->with('treinos',Treino::all());

    }


    public function update(UpdateAlunoRequest $request, User $user)
    {
        $validacao = $request->validate([
            'dieta_id' => 'required|exists:dietas,id',
            'treino_id' => 'nullable|exists:treinos,id',
        ]);
    
        $aluno = User::find($user);

        $aluno->dietas()->attach($validacao['dieta_id']);
        $aluno->treinos()->attach($validacao['treino_id']);


        return AlunoController::index();
    }

    // public function destroy($id)
    // {
    //     //
    // }
}
