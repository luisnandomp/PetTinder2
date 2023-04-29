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
            'sexo' => 'nullable|in:masculino,feminino'
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
        ->paginate();

        return view('publicacoes.busca', compact('publicacoes'));
    }

    public function create()
    {
        return view ('publicacoes.create');
    }

    public function store(Request $dados)
    {
        $publicacao = new Publicacao($dados->all());

        $dados->validate([
            'descricao' => 'required',
            'foto' => 'required',
            'id_usuario' => 'required',
            'id_animal' => 'required',
        ],[
            'descricao.required' => "Informe uma descrição",
            'foto.required' => "Informe uma foto",
            'id_usuario.required' => "Informe um usuário",
            'id_animal.required' => "Informe um animal",
        ]);

        $publicacao = Publicacao::create($dados->all());
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
