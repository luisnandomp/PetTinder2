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
                    <h2  aria-disabled="true"><strong> </strong> {{$usuario->primeiro_nome}} {{$usuario->sobrenome}}</h2>

                    <p ><strong> <img class="email"src="{{ asset('./imagens/email.png') }}"> </strong>{{$usuario->email}}</p>
                    <p ><strong>  <img src="{{ asset('./imagens/contato.png') }}"></strong>{{$usuario->tel}}</p>
                </div>
                <div class="container text-center">
                        <div class="row">

                            <div class="col">
                            <a type="button" class="btn btn-primary" href="{{route('publicacoes.create')}}">Fazer uma Divulgação</a></button>
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

<style>
    .email{
        width: 35px;
    }
</style>
@endsection
