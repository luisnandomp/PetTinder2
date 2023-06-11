@extends('layout.padrao')


@section('conteudo')
<div class="estrutura-perfil">
<div class="card mb-3 center">
    <div class="row g-0">
        <div class="col-md-4">
            <strong></strong><img width="100px" src="/storage/{{ $animal->foto }}" alt="" class="imagem-perfil" style="border-radius: 10px">
        </div>
        <div class="col-md-8">
            <div class="card-perfil">
                <h5 class="perfil-titulo" class="fa fa-align-center" aria-hidden="true">{{$animal->apelido }}</h5>
                <p class="card-text">

                <div class="container text-center">
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6">
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Espécie</div>
                                    <p class="descricao-perfil">{{$animal->pet}}</p>
                                </div>
                            </li>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6">
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Raça</div>
                                    <p class="descricao-perfil">{{$animal->raca}}</p>
                                </div>
                            </li>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6">
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Sexo</div>
                                    <p class="descricao-perfil">{{$animal->genero}}</p>
                                </div>
                            </li>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6">
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Porte</div>
                                    <p class="descricao-perfil">{{$animal->porte}}</p>
                                </div>
                            </li>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6">
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Idade</div>
                                    <p class="descricao-perfil">{{$animal->idade}}</p>
                                </div>
                            </li>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6">
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Cor</div>
                                    <p class="descricao-perfil"> {{$animal->cor}}</p>
                                </div>
                            </li>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6">
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Personalidade</div>
                                    <p class="descricao-perfil">{{$animal->personalidade}}</p>
                                </div>
                            </li>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6">
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Comorbidade</div>
                                    <p class="descricao-perfil">{{$animal->comorbidade}}</p>
                                </div>
                            </li>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6">
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Vacina</div>
                                    <p class="descricao-perfil">{{$animal->vacina}}</p>
                                </div>
                            </li>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6">
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Castração</div>
                                    <p class="descricao-perfil">{{$animal->castracao}}</p>
                                </div>
                            </li>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6">
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Localização</div>
                                    <p class="descricao-perfil">{{$animal->localidade}}</p>
                                </div>
                            </li>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6">
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Responsável
                                    </div>
                                    <p class="descricao-perfil">{{$animal->usuario->primeiro_nome}}</p>
                                </div>
                            </li>
                        </div>

                        <div class="col-12 col-sm-12 col-md-6">
                            <li class="list-group-item d-flex justify-content-between align-items-start">
                                <div class="ms-2 me-auto">
                                    <div class="fw-bold">Sobre o Pet
                                    </div>
                                    <p class="descricao-perfil">{{$animal->descricao}}</p>
                                </div>
                            </li>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row row-cols-2">
            <div class="col"><button type="button" class="botao-animal"><a href="{{route('animais.index')}}">Voltar para lista de Animais</a></button></div>
            <div class="col"><button type="button" class="botao-animal"><a href="{{route('animais.create')}}">Cadastrar outro animal</a></button></div>
        </div>
    </div>
    </div>
</div>

         <style>
                .imagem {
                     height: 60%;
                     width: 80%;

                }

                .card-text {
                     padding-right: 25px;
                 }

                .modal{
                    width:500px;
                    height:500px;
                    background-color:	#000000;
                    position:absolute;
                    top:50%;
                    left:50%;
                    transform:translate(-50%,-50%);
                    cursor: pointer;
                    display:none;
                }




        </style>
 @endsection



