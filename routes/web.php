<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlimentoController;
use App\Http\Controllers\ExercicioController;
use App\Http\Controllers\DietaAlimentoController;
use App\Http\Controllers\TreinoExercicioController;
use App\Http\Controllers\AlunoController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\RegisteredUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
if(Auth::check()==null){
    Route::get('/', function () {
        return view('dashboard');
    });
}

Route::get('/', function () {
    return view('welcome');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('/alimento', AlimentoController::class);
    Route::resource('/exercicio', ExercicioController::class);
    Route::resource('/treino', TreinoController::class);
    Route::resource('/treinoexercicio', TreinoExercicioController::class);
    Route::resource('/dieta', DietaController::class);
    Route::resource('/dietaalimento', DietaAlimentoController::class);
    Route::resource('/aluno', AlunoController::class);

    Route::get('dietaalimento/create/{dieta_id}',[DietaAlimentoController::class,'create'])->name('CriaDietaAlimento');
    Route::get('treinoexercicio/create/{treino_id}',[TreinoExercicioController::class,'create'])->name('CriaTreinoExercicio');

});


// Route::post('/aluno/create', [AlunoController::class,'store'])->name('salvaAluno');
// Route::get('/aluno', [AlunoController::class,'index']);


// Route::post('/register','Auth\RegisteredUserController@store');
Route::post('/register', [RegisteredUserController::class,'store']);