<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Animal;

class AnimaisController extends Controller
{
    public function index()
    {
        $animais = Animal::all();
        return view ('animais.index', compact('animais')); //(tirar as barras quando estiver a view pronta!)
    }

    public function create()
    {
        return view ('animais.create');
    }

    public function store(Request $requisicao)
    {;

        $requisicao->validate([
            'raca' => 'required',
            'porte' => 'required|in:pequeno,medio,grande',
            'idade' => 'required',
            'cor' => 'required',
            'comorbidade' => 'required|in:sim,nao,naosei',
            'genero' => 'required',
            'foto' => 'required|image|mimes:png,jpg,jpeg,gif',
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
            'data_cadastro.required' => "Informe a Data",
        ]);

        $dados['foto'] = '';

        if($requisicao->hasFile('foto')){
            $arquivo = $requisicao->file('foto')->store('animais', ['disk' => 'public']);

            if($arquivo){
                $dados['foto'] = $arquivo;
            }
        }
        $animal = new Animal($dados);

        $animal->save();

        return redirect()->route('animais.index');
    }

    public function show(Animal $animal)
    {
        return view('animais.show', compact('animal'));
    }

    public function edit(Animal $animal)
    {
        return view('animais.edit', compact('animal'));
    }

    public function update(Request $dados, Animal $animal)
    {
        $animal->update($dados->all());

        return redirect()->route('animais.showanimais.create', $animal->id);
    }

    public function destroy(Animal $animal)
    {
       $animal->delete();

       return redirect()->route('animais.index');
    }
}
