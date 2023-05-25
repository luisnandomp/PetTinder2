@extends('layout.padrao')

@section('conteudo')
    <div class="tudo">
    <div class="acoes-usuario my-3 row">
        <div class="col">
            <div class="d-grid gap-2">
                <a href="{{ route('publicacoes.buscar') }}" class="btn btn-primary" type="submit">QUERO ADOTAR</a>
            </div>
        </div>
        @auth
            <div class="col">
                <div class="d-grid gap-2">
                    <a href="{{ route('animais.create')}}" class="btn btn-primary" type="submit">CADASTRAR UM ANIMAL</a>
                </div>
            </div>
        @endauth
    </div>

    <div class="banner mb-3">
        <img src="imagens/Banner colorido e divertido para campanha de adoção de animais.png" class="d-block w-100" alt="20">
    </div>

    <div class="card-informativo row">
        <div class="col">
            <div class="card shadow-sm border-0 mb-33">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="img-fluid rounded-start" src="{{ asset('imagens/gatocard.png') }}">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">O QUE DEVE SER FEITO AO ADOTAR?</h5>
                            <p class="card-texxt" >Ao adotar um animal de estimação, é fundamental proporcionar um
                                ambiente amoroso e seguro para que ele possa viver uma vida feliz e saudável.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card shadow-sm border-0 mb-33">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="{{ asset('imagens/dog.card.png') }}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">GARANTA UM COMPANHEIRO EM TODOS OS MOMENTOS</h5>
                            <p class="card-text"> A convivência com animais também pode incentivar a socialização e
                                participação em atividades comunitárias, tornando as pessoas mais ativas e engajadas.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div>
            <h1 class="text-ultima">ÚLTIMAS PUBLICAÇÕES</h1>
        </div>
    <div>
        <div class="inicial">
            <div class="row g-3 justify-content-center my-3 p-4">
                @foreach ($publicacoes as $publicacao)
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="card shadow-sm">
                            <img height="250px" src="/storage/{{ $publicacao->foto }}" class="card-img-top" alt="...">

                            <div class="card-home">
                              <h5 class="card-title">Descrição: {{ $publicacao->animal->apelido }}</h5>
                              <h5 class="card-text">Porte: {{ $publicacao->animal->porte }}</h5>
                              <h5 class="card-text">Personalidade: {{ $publicacao->animal->personalidade }}</h5>
                              <a href="{{route('animais.show', $publicacao->animal->id)}}" class="btn btn-primary" <i class="fas fa-align-center    "></i>Meu Perfil</a>
                            </div>
                          </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
 @endsection
