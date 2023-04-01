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
        <form action="{{ route('publicacoes.update', $publicacao->id) }}" method="POST">
            <h1 align="center">Edite aqui o Seu lindo e cheiroso Usuáriozinho {{ $publicacao->id }}</h1>

            @csrf
            @method('PUT')

            <div>
              <label>Descrição</label>
            <input type="string" name="descricao" value="{{ $publicacao->descricao }}">
            </div>

            <div>
              <label for="">Foto</label>
              <input type="string" name="foto"value="{{ $publicacao->foto }}">
            </div>

            <div>
              <label for="">ID_usuário</label>
              <input type="string" name="id_usuario" value="{{ $publicacao->id_usuario }}">
            </div>
            <div>
                <label for="">id_animal</label>
                <input type="string" name="id_animal" value="{{ $publicacao->id_animal }}">
              </div>

            <div>
              <button type="submit">Atualizar Usuário</button>
            </div>
          </form>
    </body>
</html>
