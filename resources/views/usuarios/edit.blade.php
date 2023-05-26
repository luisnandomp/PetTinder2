@extends('layout.padrao')

@section('conteudo')
<form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
    <h1 aling="center">Edite aqui o Seu lindo e cheiroso Usuáriozinho {{ $usuario->id }}</h1>
     @csrf
    @method('PUT')

    <div>
        <label>Nome</label>
         <input type="string" name="primeiro_nome" value="{{ $usuario->primeiro_nome }}">
    </div>

    <div>
        <label for="">sobrenome</label>
        <input type="string" name="sobrenome"value="{{ $usuario->sobrenome }}">
    </div>

    <div>
        <label for="">email</label>
        <input type="string" name="email" value="{{ $usuario->email }}">
    </div>
    <div>
        <label for="">Celular</label>
        <input type="tel" name="tel" value="{{ $usuario->tel }}">
    </div>
    <div>
        <label for="">Senha</label>
        <input type="password" name="senha" value="">
    </div>
    <div>
        <label for="">confirmsenha</label>
        <input type="password" name="confirmsenha" value="">
    </div>
        <button type="submit">Atualizar Usuário</button>
    </div>
</form>
@endsection
