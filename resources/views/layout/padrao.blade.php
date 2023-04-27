<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>PetTinder</title>
        <link rel="stylesheet" href="style.css">
        <link rel="icon" href="{{ asset('imagens/logo_sem_fundo.png') }}" type="image/png">
        @vite(['resources/scss/padrao.scss'])
    </head>
    <body>
        @include('layout.template.navbar')

        <div class="site-bg container-fluid p-3">
            @yield('conteudo')
        </div>
    </body>
</html>
