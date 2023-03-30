<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicacoesController extends Controller
{
    public function index()
    {
        $publicacoes = Publicacao::all();
        return view ('publicacoes.index', compact('publicacoes'));
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
            'id_animal' => 'required'
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

    public function destroy(Publicacao $publicacao)//(Jacare $jacare)
    {
       $publicacao->delete();

       return redirect()->route('publicacoes.index');
    }
}
