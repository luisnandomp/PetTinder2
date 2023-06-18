@extends('layout.padrao')

@section('conteudo')

<div class="editar-usuario">
<form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
    <h1 aling="center" class="edit-descricao-usuario">Edite aqui o seus dados</h1>
     @csrf
    @method('PUT')

  <div class="container text-center">
      <div class="row row-cols-2">
          <div class="col">
               <label class="campo-usuario">Nome</label>
              <input type="text" class="form-control" value="{{ $usuario->primeiro_nome }}">
          </div>

          <div class="col">
              <label class="campo-animal">Sobrenome</label>
              <input type="text" class="form-control" value="{{ $usuario->sobrenome }}">
          </div>

          <div class="col">
              <label class="campo-animal">Email</label>
              <input type="text" class="form-control" value="{{ $usuario->email }}">
          </div>

          <div class="col">
              <label class="campo-animal">Celular</label>
              <input type="text" class="form-control" value="{{ $usuario->tel }}">
          </div>
      </div>

      </div>
      <div>
        <button type="submit" class="edit-usuario">Atualizar Usuário</button>
      </div>
    </div>
  </form>

 

 
  <!-- <div class="col">
    <label>Senha</label>
    <input type="password" class="form-control" value="{{ $usuario->senha }}">
  </div>

  <div class="col">
    <label>Confirmar a Senha</label>
    <input type="password" class="form-control" value="{{ $usuario->senha }}">
  </div>

</div>
</div>    -->

@endsection
