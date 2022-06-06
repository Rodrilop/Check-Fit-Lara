<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treino extends Model
{
    public function users(){
        return $this->belongsToMany('App\User');
    }
    
    use HasFactory;
    protected $fillable=[
        'nm_treino',
        'qt_repeticao_exercicio',
        'qt_carga_exercicio',
        'hr_duracao_exercicio'
    ];
}
