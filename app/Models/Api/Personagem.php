<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Model;

class Personagem extends Model
{
    protected $table = 'personagens';

    protected $fillable = [
        'nome',
        'status',
        'genero',
        'especie',
        'poder'
    ];
}
