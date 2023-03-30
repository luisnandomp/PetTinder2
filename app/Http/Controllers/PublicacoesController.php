<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicacoesController extends Controller
{
    public function index()
    {
        $usuarios = Usuario::all();
        return view ('usuarios.index', compact('usuarios'));
    }

    public function create()
    {
        return view ('usuarios.create');
    }

    public function store(Request $dados)
    {
        $usuario = new Usuario($dados->all());

        $dados->validate([
            'primeiro_nome' => 'required',
            'sobrenome' => 'required',
            'email' => 'required',
            'tel' => 'required',
            'senha' => 'required',
            'confirmsenha' => 'required',
            'sexo' => 'required'
        ]);

        $publicacao = Publicacao::create($dados->all());
        return redirect()->route('publicacoes.index');
    }

    public function show(Publicacao $publicacao)
    {
        return view('publicacoes.show', compact('publicacao'));
    }

    public function edit(Usuario $publicacao)
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
