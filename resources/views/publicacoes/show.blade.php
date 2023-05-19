@extends('layout.padrao')

@section('conteudo')
        <div>
            <h1>Vizualização das publicações</h1><br> <br>

            <ul>
                <h1>Autor da Publicação: {{$publicacao->usuario->primeiro_nome}}</h1>
                <li><strong>Descrição: </strong> {{$publicacao->descricao}} </li>
                <li> <strong>foto:</strong>
                    <img width="100px" src="/storage/{{$publicacao->foto}}" alt="">
                </li>

                <li> <strong>foto do Animal:</strong>
                    <img width="100px" src="/storage/{{ $publicacao->animal->foto }}">
                </li>
                <li><strong>id_usuario: </strong>{{$publicacao->id_usuario}}</li>
                <li><strong>Id_animal: </strong>{{$publicacao->id_animal}}</li>
            </ul>

          <button type="button" class="btn btn-info"><a href="{{route('publicacoes.index')}}">voltar para lista das publicações</a></button>
          <button type="button" class="btn btn-success"><a href="{{route('publicacoes.create')}}">Cadastrar um novo Aninaml</a></button>


        </div>
@endsection
