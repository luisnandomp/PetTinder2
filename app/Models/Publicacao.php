<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacao extends Model
{
    use HasFactory;

    protected $table = 'publicacoes';

    protected $fillable = [
        'foto',
        'descricao',
        'id_usuario',
        'id_animal',
        'created_at'
    ];
}
