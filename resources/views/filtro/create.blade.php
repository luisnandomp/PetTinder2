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
        <span class="border ">
            <div class="container overflow-hidden text-center"  >
            <div class="row gy-2"  >
              <div class="col-4" >
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" >
                    <option selected >Porte</option>
                    <option value="1"> Porte Pequeno</option>
                    <option value="2">Porte Médio</option>
                    <option value="3">Porte Grande</option>
                  </select>
              </div>
              <div class="col-4">
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Todos os sexos</option>
                    <option value="1">Macho</option>
                    <option value="2">Femea</option>

                  </select>
              </div>
              <div class="col-4">
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
              </div>
              <div class="col-4">
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                    <option selected>Open this select menu</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
              </div>
            </div>
          </div></span>




            <div class="container text-center">
                <div class="row g-2">
                  <div class="col-6">
                    <div class="p-3">
                        <div class="card" style="width: 18rem;" style="height: 9rem;">
                    <img src="{{asset('imagens/cachorro.png')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                    </div>
                    </div>
                  </div>
                <div class="col-6">
                  <div class="p-3">
                    <div class="card" style="width: 18rem;" style="height: 9rem;">
                    <img src="{{asset('imagens/cachorro.png')}}" class="card-img-top" alt="...">
                     <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                     </div>
                    </div>
                 </div>
                </div>
                </div>


    </body>
</html>
