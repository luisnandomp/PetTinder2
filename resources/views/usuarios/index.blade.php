@extends('layout.padrao')

@section('conteudo')
        <div>
            <h1 aling="center">Lista de Usuarios</h1><br> <br>

            <div>
                <table border="0" width="98%">
                    <th>ID</th>
                    <th>Primeiro Nome</th>
                    <th>Celular</th>
                    <th></th>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <td aling="center">{{ $usuario->id }}</td>
                            <td>{{ $usuario->primeiro_nome }}</td>
                            <td>{{ $usuario->tel }}</td>
                            <td>
                                <form method="POST" action="{{ route('usuarios.destroy', $usuario->id) }}">
                                    @csrf
                                    @method('DELETE')

                                    <!-- <button type="submit" class="btn btn-danger">EXCLUIR</button> -->
                                    
                                    </form>
                                


                                <div class="container text-center">
                                    <div class="row">
                                        <div class="col">
                                        <input type="submit" value="EXCLUIR" class="btn btn-success">
                                        </div>
                                        <div class="col">
                                        <a href="{{route('usuarios.show', $usuario->id)}}" role="button" class="btn btn-success">Ver</a>
                                        </div>
                                        <div class="col">
                                        <a href="{{route('usuarios.show', $usuario->id)}}" role="button" class="btn btn-success">Ver</a>
                                        </div>
                                    </div>
                                </div>













                            </td>
                        </tr>
                    @endforeach
                </table>
            </div> <br>
                <div>
                    <button type="button"><a href="{{route('layout.padrao')}}">Voltar para o incio</a></button>
                </div>
        <style>
            table, th, td {
                border: 1px solid white;
                border-collapse: collapse;
                }       
            th, td {
                 background-color: #96D4D4;
                }
        </style>
        </div>
        @endsection

