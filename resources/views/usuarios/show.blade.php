@extends('layout.padrao')

@section('conteudo')


<div class="container px-4 ">
    <div class="row gx-5">
        <div class="col">
            <img src="{{ asset('./imagens/gatoazul.avif') }}" class="dogfofiss" alt="...">
        </div>
     <div class="col">
        <div class="p-3">

                <div class="perfil">

                    <h2  aria-disabled="true"><strong> </strong> {{$usuario->primeiro_nome}}</h2>
                    <p class="mb-1"><strong>Sobrenome: </strong>{{$usuario->sobrenome}}</p>
                    <p ><strong>Sexo: </strong>{{$usuario->sexo}}</p>
                    <p ><strong>E-mail: </strong>{{$usuario->email}}</p>
                    <p ><strong>Celular: </strong>{{$usuario->tel}}</p>

                </div>
                

                <div class="container text-center">
                        <div class="row">
                            <div class="col">
                            <button type="button" class="btn btn-primary" href="{{route('usuarios.index')}}">voltar para lista de Usuários</a></button>
                            </div>
                            <div class="col">
                            <button type="button" class="btn btn-primary" href="{{route('publicacoes.create')}}">Fazer uma Divulgação</a></button>
                            </div>
                            <div class="col">
                            <a class="btn btn-primary" href="{{route('animais.index')}}">Veja seus animais cadastrados</a>

                         </div>
                </div>
            </div>


        </div>
      </div>
    </div>
</div>
@endsection
