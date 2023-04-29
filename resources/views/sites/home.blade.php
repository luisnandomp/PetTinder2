@extends('layout.padrao')

@section('conteudo')
    <div class="acoes-usuario my-3 row">
        <div class="col">
            <div class="d-grid gap-2">
                <a href="{{ route('publicacoes.buscar') }}" class="btn btn-primary" type="submit">QUERO ADOTAR</a>
            </div>
        </div>

        <div class="col">
            <div class="d-grid gap-2">
                <a href="{{ route('sites.divulga') }}" class="btn btn-primary" type="submit">QUERO DIVULGAR</a>
            </div>
        </div>
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
                            <p class="card-text">Ao adotar um animal de estimação, é fundamental proporcionar um
                                ambiente amoroso e seguro para que ele possa viver uma vida feliz e saudável.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card shadow-sm border-0 mb-3">
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

    @endsection
