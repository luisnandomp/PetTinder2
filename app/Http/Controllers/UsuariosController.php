<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

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
            'primeiro_nome' => 'required',
            'sobrenome' => 'required',
            'email' => 'required',
            'tel' => 'required',
            'senha' => 'required',
            'confirmsenha' => 'required',
            'sexo' => 'required'
        ]);

        $usuario = Usuario::create($dados->all());
        return redirect()->route('usuarios.index');
    }

    public function login()
    {
        return view ('usuarios.login');
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
        $usuario->update($dados->all());

        return redirect()->route('usuarios.show', $usuario->id);
    }

    public function destroy(Usuario $usuario)//(Jacare $jacare)
    {
       $usuario->delete();

       return redirect()->route('usuarios.index');
    }
}
