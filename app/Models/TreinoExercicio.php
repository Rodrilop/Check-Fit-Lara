<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TreinoExercicio extends Model
{
    use HasFactory;
    protected $table = 'treino_exercicio';
    protected $fillable=[
        'nm_dia_semana_treino_exercicios',
        'treino_id',
        'exercicio_id'
    ];
}
