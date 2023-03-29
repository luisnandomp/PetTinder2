<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Edit </title>
        @vite(['resources/scss/app.scss'])
    </head>
    <body>
        <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
            <h1 align="center">Edite aqui o Seu lindo e cheiroso Usuáriozinho {{ $usuario->id }}</h1>

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
                <input type="password" name="senha" value="{{ $usuario->senha }}">
              </div>
              <div>
                <label for="">confirmsenha</label>
                <input type="password" name="confirmsenha" value="{{ $usuario->confirmsenha }}">
              </div>
            <div>
                <label >Sexo</label>
                <select name="sexo">
                    <option name="sexo" value="macho" {{ $usuario->sexo == 'macho' ? 'selected' : '' }}>Macho</option>
                    <option name="sexo" value="femea" {{ $usuario->sexo == 'femea' ? 'selected' : '' }}>Femêa</option>
                </select>
              </div>
            </div>

            <div>
              <button type="submit">Atualizar Usuário</button>
            </div>
          </form>
    </body>
</html>
