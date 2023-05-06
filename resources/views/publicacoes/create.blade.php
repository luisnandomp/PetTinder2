<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="cadastro.css">
        <title>Formulario de Publicações </title>
        @vite(['resources/scss/formularios.scss'])
    </head>
    <body>
        <div class="contaider">
            <div class="form-image">
                <img src="{{ asset('imagens/dogfofis.png') }}" class="dogfofis" alt="...">
            </div>
            <div class="form">
                <form action="#">
                    <div class="form-header">
                        <div class="title">
                            <h1>Cadastre-se </h1>
                        </div>
                        <div class="login-button">
                            <button><a href="{{Route('login')}}">Entrar</a></button>
                        </div>
                    </div>
                </form>
                <form action="{{route('publicacoes.store')}}" method="POST">
                    @csrf
                    <div class="input-group">
                        <div class="input-box">
                            <label form="descricao" >Descrição</label>
                            <input id="descricao" type="text" name="descricao" placeholder="Digite uma descrição"> <!--required -->
                        @error('descricao')
                            {{$message }}
                        @enderror
                        </div>

                        <div class="input-box">
                            <label form="foto" >Foto</label>
                            <input id="foto" type="file" name="foto" placeholder="Coloque uma foto"><!--required -->
                            @error('foto')
                                {{$message }}
                            @enderror
                        </div>

                        <div class="input-box">
                            <label form="id_animal">Id_animal</label>
                            <input id="id_animal" type="number" name="id_animal" placeholder="Escolha um Animal"><!--required -->
                            @error('id_animal')
                                {{$message }}
                            @enderror
                        </div>

                        <div class="input-box">
                            <label form="id_usuario" >Id_usuario</label>
                            <input id="id_usuario" type="number" name="id_usuario" placeholder ="escolha um usuário"><!--required -->
                            @error('id_usuario')
                                {{$message }}
                            @enderror
                        </div>
                    <br>
                    <div class="continue-button" text="center">
                        <button>Continuar</button>
                    </div>
                </form>
            </div>
        </div>
        <style>
            .dogfofis{
                height: 50;
            }
        </style>
    </body>
</html>
