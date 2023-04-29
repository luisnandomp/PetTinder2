<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1" > <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

        @include('layout.template.rodape')


    </body>
</html>
