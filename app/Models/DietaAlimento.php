<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DietaAlimento extends Model
{
    use HasFactory;
    protected $fillable=[
        'qt_dieta_alimentos',
        'nm_dia_semana_dieta_alimentos',
        'nm_periodo_dieta_alimentos',
        'dieta_id',
        'alimento_id'
    ];
}
