@extends('layout.padrao')


@section('conteudo')
            <div class="card mb-3 center">
                <div class="row g-0">
                <div class="col-md-4">
                <strong></strong><img width="100px" src="/storage/{{ $animal->foto }}" alt="" class="imagem">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                    <h5 class="perfil-titulo" class="fa fa-align-center" aria-hidden="true">{{$animal->apelido }}</h5>
                    <p class="card-text">

                    
                <div class="container text-center">
                    <div class="row">
                        <div class="col-6 col-sm-4"><li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Espécie</div>
                            {{$animal->pet}} 
                            </div>
                            </li></div>

                        <div class="col-6 col-sm-4"><li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Raça</div>
                            {{$animal->raca}} 
                         </div>
                            </li></div> <br> 
                    
                <div class="container text-center">
                    <div class="row">
                        <div class="col-6 col-sm-4"><li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Sexo</div>
                            {{$animal->genero}}
                        </div>
                            </li></div>

                        <div class="col-6 col-sm-4"><li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Porte</div>
                            {{$animal->porte}} 
                        </div>
                            </li></div> <br> 
                    
                    
                <div class="container text-center">
                    <div class="row">
                        <div class="col-6 col-sm-4"><li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Idade</div>
                            {{$animal->idade}}
                        </div>
                            </li></div>

                        <div class="col-6 col-sm-4"><li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Cor</div>
                            {{$animal->cor}} 
                        </div>
                            </li></div> <br> 
                    
                <div class="container text-center">
                    <div class="row">
                        <div class="col-6 col-sm-4"><li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Personalidade</div>
                            {{$animal->personalidade}}
                        </div>
                            </li></div>

                        <div class="col-6 col-sm-4"><li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Comorbidade</div>
                            {{$animal->comorbidade}} 
                        </div>
                            </li></div> <br> 
                  

                <div class="container text-center">
                    <div class="row">
                        <div class="col-6 col-sm-4"><li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Vacina</div>
                            {{$animal->vacina}}
                        </div>
                            </li></div>

                        <div class="col-6 col-sm-4"><li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Castração</div>
                            {{$animal->castracao}} 
                        </div>
                            </li></div> <br> 
                   

                <div class="container text-center">
                    <div class="row">
                        <div class="col-6 col-sm-4"><li class="list-group-item d-flex justify-content-between align-items-start">
                        <div class="ms-2 me-auto">
                            <div class="fw-bold">Localização</div>
                            {{$animal->localidade}}
                        </div>
                            </li></div>
                    </div>
                </div>
                </div>
                </div>
          <button type="button" class="btn btn-success"><a href="{{route('animais.index')}}">voltar para lista de Animais</a></button>
          <button type="button" class="btn btn-success"><a href="{{route('animais.create')}}">Cadastrar outro animal</a></button>
            </div>

            <style>
                .imagem{
                    height: 60%;
                    width: 80%;

                }

                .card-text{
                    padding-right: 25px;
                }
            </style>

@endsection

<!-- <ul class="list-group">
                            <li class="list-group-item"><strong>Qual seu PET? </strong>{{$animal->pet}} </li>    
                            <li class="list-group-item"><strong>Raça: </strong> {{$animal->raca}} </li>
                            <li class="list-group-item"><strong>Gênero: </strong>{{$animal->genero}}</li>
                            <li class="list-group-item"><strong>Porte: </strong>{{$animal->porte}}</li>
                            <li class="list-group-item"><strong>Idade: </strong>{{$animal->idade}}</li>
                            <li class="list-group-item"><strong>Cor: </strong>{{$animal->cor}}</li>
                            <li class="list-group-item"><strong>Personalidade: </strong>{{$animal->personalidade}}</li>
                            <li class="list-group-item"><strong>Comorbidade: </strong>{{$animal->comorbidade}} </li>
                            <li class="list-group-item"><strong>Vacina: </strong>{{$animal->vacina}}</li>
                            <li class="list-group-item"><strong>Castração: </strong>{{$animal->castracao}}</li>
                            <li class="list-group-item"><strong>Localidade: </strong>{{$animal->localidade}}</li>
                                      </ul>
                        </ul></small></p> -->