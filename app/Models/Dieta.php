<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dieta extends Model
{
    public function users(){
        return $this->belongsToMany('App\User');
    }

    use HasFactory;
    protected $fillable=[
        'nm_dieta',
        'qt_caloria_dieta',
        'dt_inicio_dieta',
        'dt_termino_dieta'
    ];
}
