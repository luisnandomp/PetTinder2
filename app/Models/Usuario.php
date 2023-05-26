<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;

    protected $table = 'usuarios';

    protected $fillable = [
        'primeiro_nome',
        'sobrenome',
        'email',
        'tel',
        'senha',
    ];

    public function publicacoes()
    {
        return $this->hasMany(Publicacao::class, 'id_usuario');
    }

    public function getAuthPassword()
    {
        return $this->senha;
    }
}
