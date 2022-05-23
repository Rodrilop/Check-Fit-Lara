<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlimentoController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/alimento/novo', [AlimentoController::class, 'create']);
Route::post('/alimento/novo', [AlimentoController::class, 'store'])->name('salvar_alimento');
Route::get('/alimento/ver', [AlimentoController::class, 'show']);
Route::get('/alimento/del/{id}', [AlimentoController::class, 'destroy'])->name('excluir_alimento');
Route::get('/alimento/edit/{id}', [AlimentoController::class, 'edit'])->name('editar_alimento');
Route::post('/alimento/edit/{id}', [AlimentoController::class, 'update'])->name('atualizar_alimento');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
