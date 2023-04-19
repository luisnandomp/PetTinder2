<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PetTinder</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="{{ asset('imagens/logo_sem_fundo.png') }}" type="image/png">
    @vite(['resources/scss/padrao.scss'])
</head>

<body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>


    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <img class="navbar-brand" src="{{ asset('imagens/logo_sem_fundo.png') }}">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Quem somos</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Patrocínio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Contato</a>
                    </li>

                </ul>
                <form class="d-flex" role="search">
                    <a href="{{ route('usuarios.create') }}"><button type="button"
                            class="btn btn-success">Cadastrar-se</button></a>

                    <a href="{{ Route('usuarios.login') }}"> <button type="button"
                            class="btn btn-info">Entrar</button></a>
                </form>
            </div>
        </div>
    </nav>
    <br>

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>

        <hr>

        <div class="row">
            <div class="col">
                <div class="d-grid gap-2">
                    <a href="{{ route('animais.create') }}" class="btn btn-primary" type="submit">QUERO ADOTAR</a>
                </div>
            </div>
            <div class="col">
                <div class="d-grid gap-2">
                    <a href="{{ route('sites.divulga') }}" class="btn btn-primary" type="submit">QUERO DIVULGAR</a>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imagens/Banner colorido e divertido para campanha de adoção de animais.png"
                    class="d-block w-100" alt="20">
            </div>

        </div>
        <br>
        <br>
        <hr>
        <div class="row">
            <div class="col">
                <div class="card mb-33" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img class="img-fluid rounded-start" src="{{ asset('imagens/gatocard.png') }}">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">O QUE DEVE SER FEITO AO ADOTAR?</h5>
                                <p class="card-text">Ao adotar um animal de estimação, é fundamental proporcionar um ambiente amoroso e seguro para que ele possa viver uma vida feliz e saudável.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="{{ asset('imagens/dog.card.png') }}" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">GARANTA UM COMPANHEIRO EM TODOS OS MOMENTOS</h5>
                                <p class="card-text"> A convivência com animais também pode incentivar a socialização e participação em atividades comunitárias, tornando as pessoas mais ativas e engajadas.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
</body>

</html>
