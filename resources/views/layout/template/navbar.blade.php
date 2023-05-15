<nav class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <a href="{{route('layout.padrao')}}"><img class="navbar-brand" src="{{ asset('imagens/logo_sem_fundo.png') }}"></a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('sites.quem')}}"> Quem Somos</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('sites.patrocinio')}}">Parceiros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('publicacoes.buscar')}}">Quero Adotar</a>
                </li>

            </ul>
            <form class="d-flex" role="search">


                @auth
                <a href="{{ route('usuarios.show', Auth::user()->id) }}"><button type="button"
                    class="btn btn-success">Meu Perfil</button></a>

                    <a href="{{ Route('sair') }}"> <button type="button"
                    class="btn btn-danger">Sair</button></a>
                @endauth

                @guest
                <a href="{{ route('usuarios.create') }}"><button type="button"
                    class="btn btn-success">Cadastrar-se</button></a>

                    <a href="{{ Route('login') }}"> <button type="button"
                        class="btn btn-info">Entrar</button></a>
                @endguest
            </form>
        </div>
    </div>
</nav>
