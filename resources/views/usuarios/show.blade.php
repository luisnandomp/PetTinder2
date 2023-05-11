@extends('layout.padrao')

@section('conteudo')


<div class="container px-4 text-center">
    <div class="row gx-5">
        <div class="col">
            <img src="{{ asset('imagens/meuperfil.jpg') }}" class="dogfofiss" alt="...">

        </div>
     <div class="col">
        <div class="p-3" >
            <ul >
                <div>
                    <h1><strong>Primeiro Nome: </strong> {{$usuario->primeiro_nome}} </h1>
                    <h1> <strong>Sobrenome: </strong>{{$usuario->sobrenome}}</h1>
                    <h1><strong>Sexo: </strong>{{$usuario->sexo}}</h1>
                    <h1><strong>E-mail: </strong>{{$usuario->email}}</h1>
                    <h1><strong>Celular: </strong>{{$usuario->tel}}</h1>
                </div>
                <button type="button"><a href="{{route('usuarios.index')}}">voltar para lista de Usuários</a></button>
            </ul>
        </div>
      </div>
    </div>
</div>




@endsection
