<nav class="navbar navbar-expand-lg">
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
