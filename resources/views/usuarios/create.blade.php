<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>FORMULARIO DE CADASTRO </title>
    @vite(['resources/scss/formularios.scss'])
</head>

<body>
    <div class="contaider">
        <div class="form-image">
            <img src="{{ asset('imagens/gatin.png') }}">
        </div>
        <div class="form">
            <form action="#">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastre-se </h1>
                    </div>
                    <div class="login-button">
                        <button><a href="{{ Route('login_store') }}">Entrar</a></button>
                    </div>
                </div>
            </form>
            <form action="{{ route('usuarios.store') }}" method="POST">
                @csrf
                <div class="input-group">
                    <div class="input-box">
                        <label form="primeiro_nome">Primeiro nome </label>
                        <input id="primeiro_nome" type="text" name="primeiro_nome"
                            placeholder="Digite seu primeiro nome">
                        <!--required -->
                        @error('pirmeiro_nome')
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="input-box">
                        <label form="sobrenome">Sobrenome</label>
                        <input id="sobrenome" type="text" name="sobrenome" placeholder="Digite seu sobrenome">
                        <!--required -->
                        @error('sobrenome')
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="input-box">
                        <label form="email">Email</label>
                        <input id="email" type="email" name="email" placeholder="Digite seu email">
                        <!--required -->
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="input-box">
                        <label form="tel">Celular</label>
                        <input id="tel" type="tel" name="tel" placeholder="(xx)xxx-xxxx">
                        <!--required -->
                        @error('tel')
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="input-box">
                        <label form="senha">Senha</label>
                        <input id="senha" type="password" name="senha" placeholder="Digite sua senha">
                        <!--required -->
                        @error('senha')
                            {{ $message }}
                        @enderror
                    </div>

                    <div class="input-box">
                        <label form="senha_confirmation">Confirma sua Senha</label>
                        <input id="senha_confirmation" type="password" name="senha_confirmation"
                            placeholder="Digite sua senha">
                        <!--required -->
                        @error('senha_confirmation')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <div text="center" class="login-button">
                    <button type="submit">Continuar</button>
                    <button><a href="{{ route('layout.padrao') }}">Voltar para o incio</a></button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
