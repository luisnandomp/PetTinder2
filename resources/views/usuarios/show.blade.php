@extends('layout.padrao')

@section('conteudo')


<div class="container px-4 text-center">
    <div class="row gx-5">
        <div class="col">
            <img src="{{ asset('./imagens/gatoazul.avif') }}" class="dogfofiss" alt="...">
            @foreach ($animais as $animal)

                <p><strong>raca: </strong> {{$animal->raca}} </p>
                <p> <strong>porte: </strong>{{$animal->porte}}</p>
                <p><strong>apelido: </strong>{{$animal->apelido}}</p>
                <p><strong>foto:</strong><img width="100px" src="/storage/{{ $animal->foto }}" alt=""></p>
            @endforeach
        </div>
     <div class="col">
        <div class="p-3">
            <ul >
                <div class="conteudo">
                    <h1 class="linhaum"><strong>Primeiro Nome: </strong> {{$usuario->primeiro_nome}} </h1>
                    <h1 class="linhadois"> <strong>Sobrenome: </strong>{{$usuario->sobrenome}}</h1>
                    <h1 class="linhatres"><strong>Sexo: </strong>{{$usuario->sexo}}</h1>
                    <h1 class="linhaquatro"><strong>E-mail: </strong>{{$usuario->email}}</h1>
                    <h1 class="linhacinco"><strong>Celular: </strong>{{$usuario->tel}}</h1>
                </div>
                <button type="button"><a href="{{route('usuarios.index')}}">voltar para lista de Usuários</a></button>
                <button type="button"><a href="{{route('animais.create')}}">Cadastrar um novo animal</a></button>
            </ul>
        </div>
      </div>
    </div>
</div>
@endsection
