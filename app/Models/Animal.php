<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'animais';

    protected $fillable = [
        'raca',
        'porte',
        'idade',
        'cor',
        'personalidade',
        'comorbidade',
        'genero',
        'apelido',
        'foto',
        'vacina',
        'castracao',
        'localidade',
        'observacao',
        'data_cadastro',
    ];

}
