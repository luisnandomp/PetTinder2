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
            <h1>Vizualização dos Usuário</h1><br> <br>

            <ul>
                <li><strong>Primeiro Nome: </strong> {{$usuario->primeiro_nome}} </li>
                <li> <strong>Sobrenome: </strong>{{$usuario->sobrenome}}</li>
                <li><strong>Sexo: </strong>{{$usuario->sexo}}</li>
                <li><strong>E-mail: </strong>{{$usuario->email}}</li>
                <li><strong>Celular: </strong>{{$usuario->tel}}</li>
            </ul>

          <button type="button"><a href="{{route('usuarios.index')}}">voltar para lista de Usuários</a></button>


        </div>
    </body>
</html>
