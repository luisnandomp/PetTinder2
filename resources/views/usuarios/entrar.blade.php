<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="cadastro.css">
        <title>FORMULARIO DE CADASTRO </title>
        @vite(['resources/scss/login.scss'])
    </head>
    <body>
        <div class="contaider">
            <div class="form-image">
                <img src="{{ asset('imagens/cachorro.png')}}">
            </div>
            <div class="form">
                <form action="{{ route('login_store') }}" method="POST">
                    @csrf

                    <div class="form-header">
                        <div class="title">
                            <h1>Acessar</h1>
                        </div>
                    </div>
                    <div class="input-group">
                        <div class="input-box">
                            <label form="email" >Usuário </label>
                            <input id="email" class="form-control" type="email" name="email" placeholder="Digite o usuário" required>
                        </div>
                        <div class="input-box">
                            <label form="senha" >Senha</label>
                            <input id="senha" class="form-control" type="password" name="senha" placeholder="Digite a senha" required>

                            
                        </div>

                    </div>
                    <br>
                    <div class="continue-button" text="center">
                        <input type="submit" value="Entrar">
                    </div>
                </form>
                <br>
                <div class="continue-button" text="center">
                    <button><a href="{{Route('usuarios.create')}}"> Cadastrar-se  </a> </button>
                </div>
                <br>
                <div class="continue-button" text="center">
                    <button><a href="{{Route('layout.padrao')}}"> Voltar  </a> </button>
                </div>
            </div>
        </div>



    </body>
</html>
