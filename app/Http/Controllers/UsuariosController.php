<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsuariosController extends Controller
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
            'primeiro_nome' => 'required|string',
            'sobrenome' => 'required|string',
            'email' => 'required|email',
            'tel' => 'required|string',
            'senha' => 'required|string|confirmed',
            'sexo' => 'required'
        ], [
            'primeiro_nome.required' => "Informe seu Nome",
            'sobrenome.required' => "Informe seu Sobrenome",
            'email.required' => "Informe seu E-mail!",
            'tel.required' => "Informe seu Celular!",
            'senha.required' => "Informe sua senha!",
            'sexo.required' => "Escolha seu sexo!"
        ]);

        $dados = $dados->all();
        $dados['senha'] = Hash::make($dados['senha']);

        $usuario = Usuario::create($dados);
        return redirect()->route('usuarios.index');
    }

    public function show(Usuario $usuario)
    {
        return view('usuarios.show', compact('usuario'));
    }

    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit', compact('usuario'));
    }

    public function update(Request $dados, Usuario $usuario)
    {
        $dados = $dados->all();
        $dados['senha'] = Hash::make($dados['senha']);

        $usuario = Usuario::create($dados);


        return redirect()->route('usuarios.show', $usuario->id);
    }

    public function destroy(Usuario $usuario)
    {
       $usuario->delete();

       return redirect()->route('usuarios.index');
    }
}
