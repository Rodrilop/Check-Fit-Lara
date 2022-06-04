<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlimentoController;
use App\Http\Controllers\DietaAlimentoController;
use Illuminate\Support\Facades\Auth;

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
if(Auth::check()){
    Route::get('/', function () {
        return view('dashboard');
    });
}
else{
    Route::get('/', function () {
        return view('welcome');
    });
}


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
    Route::resource('/dieta', DietaController::class);
    Route::resource('/dietaalimento', DietaAlimentoController::class);

    Route::get('dietaalimento/create/{dieta_id}',[DietaAlimentoController::class,'create'])->name('CriaDietaAlimento');


});
