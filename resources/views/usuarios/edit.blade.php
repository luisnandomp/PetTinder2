@extends('layout.padrao')

@section('conteudo')
<form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
    <h1 aling="center">Edite aqui o Seu lindo e cheiroso Usuáriozinho {{ $usuario->id }}</h1>
     @csrf
    @method('PUT')

<div class="row g-3">
  <div class="col">
    <label>Nome</label>
    <input type="text" class="form-control" value="{{ $usuario->primeiro_nome }}">
  

  <div class="col">
    <label>Sobrenome</label>
    <input type="text" class="form-control" value="{{ $usuario->sobrenome }}">
  </div>

  <div class="col">
    <label>Email</label>
    <input type="text" class="form-control" value="{{ $usuario->email }}">
  </div>

  <div class="col">
    <label>Celular</label>
    <input type="text" class="form-control" value="{{ $usuario->tel }}">
  </div>

  <div class="col">
    <label>Senha</label>
    <input type="password" class="form-control" value="{{ $usuario->senha }}">
  </div>

  <div class="col">
    <label>Confirmar a Senha</label>
    <input type="password" class="form-control" value="{{ $usuario->senha }}">
  </div>

</div>
</div>   
        <button type="submit">Atualizar Usuário</button>
</form>
@endsection
