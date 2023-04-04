<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimaisController extends Controller
{


    public function index()
    {
        $animais = Animal::all();
        return view ('animais.index', compact('animais'));
    }

    public function create()
    {
        return view ('animais.create');
    }

    public function store(Request $dados)
    {
        $animal = new Animal($dados->all());

        $dados->validate([
            'raca' => 'required',
            'porte' => 'required',
            'idade' => 'required',
            'cor' => 'required',
            'comorbidade' => 'required',
            'genero' => 'required',
            'foto' => 'required',
            'vacina' => 'required',
            'castracao' => 'required',
            'localidade' => 'required',
            'data_cadastro' => 'required',
        ],[
            'raca.required' => "Informe uma raça",
            'porte.required' => "Informe o porte",
            'idade.required' => "Informe a idade",
            'cor.required' => "Informe a cor",
            'comorbidade.required' => 'Informe a comorbidade',
            'genero.required' => "Informe o gênero",
            'foto.required' => "Informe uma foto",
            'vacina.required' => "Informe a vacina",
            'castracao.required' => "Informe a castração",
            'localidade.required' => "Informe a localidade",
            'data_cadastro' => "Informe a Data",
        ]);

        $animal = Animal::create($dados->all());
        return redirect()->route('animais.index');
    }

}
