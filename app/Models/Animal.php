<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
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
        'pet',
        'genero',
        'apelido',
        'foto',
        'vacina',
        'castracao',
        'localidade',
        // 'usuario_id'
    ];

    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    // public function getGeneroAttribute($value)
    // {
    //     if($value == 'masculino'){
    //         return 'Macho';
    //     }else if ($value == 'feminino'){
    //         return 'Fêmea';
    //     }
    // }
}
