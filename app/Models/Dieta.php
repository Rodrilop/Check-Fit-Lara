<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dieta extends Model
{
    use HasFactory;
    protected $fillable=[
        'cd_dieta',
        'nm_dieta',
        'qt_alimento_dieta',
        'dt_inicio_dieta',
        'nm_dia_semana_dieta',
        'nm_periodo_dieta',
        'dt_termino_dieta'
    ];
}
