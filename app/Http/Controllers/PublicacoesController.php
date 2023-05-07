<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacao;

class PublicacoesController extends Controller
{
    public function index()
    {
        $publicacoes = Publicacao::all();
        return view ('publicacoes.index', compact('publicacoes'));
    }

    public function buscar(Request $request)
    {
        $request->validate([
            'porte' => 'nullable|in:pequeno,medio,grande',
            'sexo' => 'nullable|in:masculino,feminino',
            'castracao' => 'nullable|in:Sim,Não',
            'comorbidade' => 'nullable|in:Sim,Não',
            'vacina' => 'nullable|in:Sim,Não'

        ]);

        $publicacoes = Publicacao::when($request->porte, function($query, $porte){
            return $query->whereHas('animal', function($query) use ($porte){
                return $query->where('porte', $porte);
            });
        })
        ->when($request->sexo, function($query, $sexo) {
            return $query->whereHas('animal', function($query) use ($sexo){
                return $query->where('genero', $sexo);
            });
        })

        ->when($request->castracao, function($query, $castracao) {
            return $query->whereHas('animal', function($query) use ($castracao){
                return $query->where('castracao', $castracao);
            });
        })

        ->when($request->comorbidade, function($query, $comorbidade) {
            return $query->whereHas('animal', function($query) use ($comorbidade){
                return $query->where('comorbidade', $comorbidade);
            });
        })

        ->when($request->vacina, function($query, $vacina) {
            return $query->whereHas('animal', function($query) use ($vacina){
                return $query->where('vacina', $vacina);
            });
        })

        ->paginate();

        return view('publicacoes.busca', compact('publicacoes'));
    }

    public function create()
    {
        return view ('publicacoes.create');
    }

    public function store(Request $requisicao)
    {
        $requisicao->validate([
            'descricao' => 'required',
            'foto' => 'required|image|mimes:png,jpg,jpeg,gif',
            'id_animal' => 'required',
        ],[
            'descricao.required' => "Informe uma descrição",
            'foto.required' => "Informe uma foto",
            'id_animal.required' => "Informe um animal",
        ]);

        $dados = $requisicao->except('id_usuario', 'id_animal');

        $dados['foto'] = '';

        if($requisicao->hasFile('foto')){
            $arquivo = $requisicao->file('foto')->store('publicacoes', ['disk' => 'public']);

            if($arquivo){
                $dados['foto'] = $arquivo;
            }
        }

        $publicacao = new Publicacao($dados);

        $publicacao->usuario()->associate($requisicao->user());
        $publicacao->animal()->associate($requisicao->id_animal);

        $publicacao->save();

        return redirect()->route('publicacoes.index');
    }

    public function show(Publicacao $publicacao)
    {
        return view('publicacoes.show', compact('publicacao'));
    }

    public function edit(Publicacao $publicacao)
    {
        return view('publicacoes.edit', compact('publicacao'));
    }

    public function update(Request $dados, Publicacao $publicacao)
    {
        $publicacao->update($dados->all());

        return redirect()->route('publicacoes.show', $publicacao->id);
    }

    public function destroy(Publicacao $publicacao)
    {
       $publicacao->delete();

       return redirect()->route('publicacoes.index');
    }
}
