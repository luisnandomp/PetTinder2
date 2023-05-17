@extends('layout.padrao')

@section('conteudo')
        <div>
            <h1 align="center">Lista de Publicações</h1><br> <br>
            <div>
                <table border="0" width="98%">
                    <th>ID</th>
                    <th>Descrição</th>
                    <th>Foto</th>
                    @foreach ($publicacoes as $publicacao)
                        <tr>
                            <td align="center">{{ $publicacao->id }}</td>
                            <td>{{ $publicacao->descricao }}</td>
                            <td>
                                <img width="100px" src="/storage/{{ $publicacao->foto }}" alt="">
                                </td>
                            <td>
                                <form method="POST" action="{{ route('publicacoes.destroy', $publicacao->id) }}">
                                    @csrf
                                    @method('DELETE')

                                    <!-- <button type="submit" class="btn btn-danger">EXCLUIR</button> -->
                                    <input type="submit" value="EXCLUIR">
                                    </form>
                                <a href="{{route('publicacoes.show', $publicacao->id)}}" role="button">Ver</a>
                                <a href="{{route('publicacoes.edit', $publicacao->id)}}" role="button">Editar</a>

                            </td>
                        </tr>
                    @endforeach
                </table>
            </div> <br>
                <div>
                    <button type="button"><a href="{{route('layout.padrao')}}">Voltar para o incio</a></button>
                    <button type="button" class="btn btn-success"><a href="{{route('publicacoes.create')}}">Cadastrar um novo Aninaml</a></button>
                </div>

        </div>
@endsection

