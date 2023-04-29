<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = [
        'primeiro_nome',
        'sobrenome',
        'email',
        'tel',
        'senha',
        'confirmsenha',
        'sexo',
    ];

    public function publicacoes()
    {
        return $this->hasMany(Publicacao::class, 'usuario_id');
    }
}
