@extends('layout.padrao')

@section('conteudo')
        <div>
            <h1>Vizualização das publicações</h1><br> <br>

            <ul>
                <h1>Autor da Publicação: {{$publicacao->usuario->primeiro_nome}}</h1>
                <li><strong>Descrição: </strong> {{$publicacao->descricao}} </li>
                <li> <strong>foto:</strong>
                    <img width="100px" src="/storage/{{$publicacao->animal->foto}}" alt="">
                </li>

          <button type="button" class="btn btn-info"><a href="{{route('publicacoes.index')}}">voltar para lista das publicações</a></button>
          <button type="button" class="btn btn-success"><a href="{{route('publicacoes.create')}}">Fazer uma nova Publicação</a></button>


        </div>
@endsection
