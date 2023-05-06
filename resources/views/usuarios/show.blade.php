@extends('layout.padrao')

@section('conteudo')
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
@endsection
