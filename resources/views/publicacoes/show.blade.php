<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Usuário unico</title>
        @vite(['resources/scss/app.scss'])
    </head>
    <body>
        <div>
            <h1>Vizualização das publicações</h1><br> <br>

            <ul>
                <li><strong>Descrição: </strong> {{$publicacao->descricao}} </li>
                <li> <strong>foto: </strong>{{$publicacao->foto}}</li>
                <li><strong>id_usuario: </strong>{{$publicacao->id_usuario}}</li>
                <li><strong>Id_animal: </strong>{{$publicacao->id_animal}}</li>
            </ul>

          <button type="button"><a href="{{route('publicacoes.index')}}">voltar para lista das publicações</a></button>


        </div>
    </body>
</html>
