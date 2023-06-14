@extends('layout.padrao')


@section('conteudo')
    <div class="estrutura-perfil">
        <div class="card mb-3 center">
            <div class="row g-0">
                <div class="col-md-4">
                    <strong></strong><img width="100px" src="/storage/{{ $publicacao->animal->foto }}" alt=""
                        class="imagem-perfil" style="border-radius: 10px">
                </div>
                <div class="col-md-8">
                    <div class="card-perfil">
                        <h5 class="perfil-titulo" class="fa fa-align-center" aria-hidden="true">
                            {{ $publicacao->animal->apelido }}</h5>
                        <p class="card-text">

                        <div class="container text-center">
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-6">
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <div class="d-flex align-items-center">
                                                <p class="ms-1 mb-0 fw-bold">Espécie</p>
                                            </div>

                                            <p class="descricao-perfil">{{ $publicacao->animal->pet }}</p>
                                        </div>
                                    </li>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6">
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">Raça</div>
                                            <p class="descricao-perfil">{{ $publicacao->animal->raca }}</p>
                                        </div>
                                    </li>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6">
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">Sexo</div>
                                            <p class="descricao-perfil">{{ $publicacao->animal->genero }}</p>
                                        </div>
                                    </li>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6">
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">Porte</div>
                                            <p class="descricao-perfil">{{ $publicacao->animal->porte }}</p>
                                        </div>
                                    </li>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6">
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">Idade</div>
                                            <p class="descricao-perfil">{{ $publicacao->animal->idade }}</p>
                                        </div>
                                    </li>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6">
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">Cor</div>
                                            <p class="descricao-perfil"> {{ $publicacao->animal->cor }}</p>
                                        </div>
                                    </li>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6">
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">Personalidade</div>
                                            <p class="descricao-perfil">{{ $publicacao->animal->personalidade }}</p>
                                        </div>
                                    </li>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6">
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">Comorbidade</div>
                                            <p class="descricao-perfil">{{ $publicacao->animal->comorbidade }}</p>
                                        </div>
                                    </li>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6">
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">Vacina</div>
                                            <p class="descricao-perfil">{{ $publicacao->animal->vacina }}</p>
                                        </div>
                                    </li>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6">
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">Castração</div>
                                            <p class="descricao-perfil">{{ $publicacao->animal->castracao }}</p>
                                        </div>
                                    </li>
                                </div>

                                <div class="col-12 col-sm-12 col-md-6">
                                    <li class="list-group-item d-flex justify-content-between align-items-start">
                                        <div class="ms-2 me-auto">
                                            <div class="fw-bold">Localização</div>
                                            <p class="descricao-perfil">{{ $publicacao->animal->localidade }}</p>
                                        </div>
                                    </li>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div>
                                    <h5 class="card-title">Sobre o Pet</h5>
                                    <p class="sobre-pet">{{ $publicacao->descricao }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-12 p-3">
                    <div class="card">
                        <div class="card-usuario">
                            <h5 class="card-title">Quer Adotar?</h5>
                            <p class="responsavel">Para adotar esse pet ou saber mais sobre ele, entre em contato com o Responsável:</p>
                            <p class="informacoes">
                                <a class="link-responsavel"href="mailto: {{ $publicacao->usuario->email }} ">
                                    <img width="30px" src=" {{ Vite::asset('resources/images/email.png') }}" alt="">
                                    {{ $publicacao->usuario->email }}
                                </a>
                            </p>
                            <p class="informacoes">
                                <a class="link-responsavel" href="https://web.whatsapp.com/send?phone= {{ $publicacao->usuario->tel }}">
                                <img width="30px" src=" {{ Vite::asset('resources/images/whatsapp.png') }}" alt="">
                                {{ $publicacao->usuario->tel }}
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div class="row row-cols-2">
                    <div class="col"><button type="button" class="botao-animal"><a
                                href="{{ route('animais.index') }}">Voltar para lista de Animais</a></button></div>
                    <div class="col"><button type="button" class="botao-animal"><a
                                href="{{ route('animais.create') }}">Cadastrar outro animal</a></button></div>
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

        .modal {
            width: 500px;
            height: 500px;
            background-color: #000000;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            cursor: pointer;
            display: none;
        }
    </style>
@endsection
