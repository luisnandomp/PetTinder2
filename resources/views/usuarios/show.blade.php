@extends('layout.padrao')

@section('conteudo')
    <div class="container px-4 ">
        <div class="row gx-5">
            <div class="col">
                <center>
                    <img src="{{ asset('./imagens/gatoazul.avif') }}" class="dogfofiss" alt="...">
                </center>
            </div>
            <div class="col">
                <div class="p-3">
                    <div class="perfil">
                        <h2 aria-disabled="true"><strong> </strong> {{ $usuario->primeiro_nome }} {{ $usuario->sobrenome }}
                        </h2>

                        <p><strong> <img class="email"src="{{ asset('./imagens/email.png') }}">
                            </strong>{{ $usuario->email }}</p>
                        <p><strong> <img src="{{ asset('./imagens/contato.png') }}"></strong>{{ $usuario->tel }}</p>
                    </div>
                    <div class="container text-center">
                        <div class="row">

                            <div class="col">
                                <a type="button" class="btn btn-primary" href="{{ route('publicacoes.create') }}">Fazer uma
                                    Divulgação</a></button>
                            </div>
                            <div class="col">
                                <a class="btn btn-primary" href="{{ route('animais.index') }}">Veja seus animais
                                    cadastrados</a>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="tabela">
                    <h1 align="center">Lista de Animais</h1><br> <br>

                    <div>
                        <table border="0" width="98%">
                            <th>ID</th>
                            <th>Apelido</th>
                            <th>Raca</th>
                            <th>Idade</th>
                            <th>Ações</th>
                            @foreach ($usuario->animais as $animal)
                                <tr>
                                    <td align="center">{{ $animal->id }}</td>
                                    <td>{{ $animal->apelido }}</td>
                                    <td>{{ $animal->raca }}</td>
                                    <td>{{ $animal->idade }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('animais.destroy', $animal->id) }}">
                                            @csrf
                                            @method('DELETE')

                                            <!-- <button type="submit" class="btn btn-danger">EXCLUIR</button> -->
                                            <div class="container text-center">
                                                <div class="row">
                                                    <div class="col">
                                                        <input type="submit" value="EXCLUIR" class="btn btn-success">
                                                    </div>
                                                    <div class="col">
                                                        <a href="{{ route('animais.show', $animal->id) }}" role="button"
                                                            class="btn btn-success">Ver</a>
                                                    </div>
                                                    <div class="col">
                                                        <a href="{{ route('animais.edit', $animal->id) }}" role="button"
                                                            class="btn btn-success">Editar</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>



                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div> <br>
                    <div>
                        <button type="button" class="btn btn-success"><a href="{{ route('layout.padrao') }}">Voltar para o
                                incio</a></button>
                        <button type="button" class="btn btn-success"><a
                                href="{{ route('publicacoes.create') }}">Cadastrar um novo Aninaml</a></button>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <style>
        .email {
            width: 35px;
        }
    </style>
@endsection
