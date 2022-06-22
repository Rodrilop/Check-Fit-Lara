<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dieta extends Model
{
    use HasFactory;
    protected $fillable=[
        'nm_dieta',
        'qt_caloria_dieta',
        'dt_inicio_dieta',
        'dt_termino_dieta'
    ];

    public function users(){
        return $this->belongsToMany(related: User::class)->withTimestamps();
    }
}
