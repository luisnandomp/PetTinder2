<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Lista dos Usuarios</title>
        @vite(['resources/scss/app.scss'])
    </head>
    <body>

        <div>
            <h1 align="center">Lista de Usuarios</h1><br> <br>

            <div>
                <table border="0" width="98%">
                    <th>ID</th>
                    <th>Primeiro Nome</th>
                    <th>Celular</th>
                    <th></th>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td align="center">{{ $usuario->id }}</td>
                            <td>{{ $usuario->primeiro_nome }}</td>
                            <td>{{ $usuario->tel }}</td>
                            <td>
                                <form method="POST" action="{{ route('usuarios.destroy', $usuario->id) }}">
                                    @csrf
                                    @method('DELETE')

                                    <!-- <button type="submit" class="btn btn-danger">EXCLUIR</button> -->
                                    <input type="submit" value="EXCLUIR">
                                    </form>
                                <a href="{{route('usuarios.show', $usuario->id)}}" role="button">Ver</a>
                                <a href="{{route('usuarios.edit', $usuario->id)}}" role="button">Editar</a>

                            </td>
                        </tr>
                    @endforeach
                </table>
            </div> <br>
                <div>
                    <button type="button"><a href="{{route('layout.padrao')}}">Voltar para o incio</a></button>
                </div>

        </div>
    </body>
</html>

