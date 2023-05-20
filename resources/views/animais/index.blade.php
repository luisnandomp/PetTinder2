@extends('layout.padrao')

@section('conteudo')
        <div class="tabela">
            <h1 align="center">Lista de Animais</h1><br> <br>

            <div>
                <table border="0" width="98%">
                    <th>ID</th>
                    <th>Apelido</th>
                    <th>Raca</th>
                    <th>Idade</th>
                    @foreach ($animais as $animal)
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
                                    <input type="submit" value="EXCLUIR" class="btn btn-success">
                                    </form>
                                <a href="{{route('animais.show', $animal->id)}}" role="button">Ver</a>
                                <a href="{{route('animais.edit', $animal->id)}}" role="button">Editar</a>

                            </td>
                        </tr>
                    @endforeach
                </table>
            </div> <br>
                <div>
                    <button type="button" class="btn btn-success"><a href="{{route('layout.padrao')}}">Voltar para o incio</a></button>
                    <button type="button" class="btn btn-success"><a href="{{route('publicacoes.create')}}">Cadastrar um novo Aninaml</a></button>
                </div>

        </div>
        <style>table, th, td {
  border: 1px solid white;
  border-collapse: collapse;
}
th, td {
  background-color: #96D4D4;
}</style>
@endsection
