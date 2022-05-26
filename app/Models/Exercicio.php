<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exercicio extends Model
{
    use HasFactory;
    protected $fillable=[
        'nm_exercicio',
        'ds_exercicio',
        'nm_grupo_muscular_exercicio'
    ];
}
