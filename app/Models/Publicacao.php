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


    public function foto(){
        return $this->BelongsTo(Animal::class);
    }

    public function animal()
    {
        return $this->belongsTo(Animal::class, 'id_animal');
    }

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario');
    }
}
