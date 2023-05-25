<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="cadastro.css">
        <title>Cadastro de animal</title>
        @vite(['resources/scss/formularios.scss'])
    </head>
    <body>
        <div class="contaider1">

                <img src="{{ asset('imagens/publicacao.png')}}" class="form-image">

            <div class="form">
                <form action="#">
                    <div class="form-header">
                        <div class="title">
                            <h2>Cadastre o Seu Pet</h2>
                        </div>
                        <div class="login-button">
                            <button><a href="{{Route('animais.create')}}">Entrar</a></button>
                        </div>
                    </div>
                </form>
                <form action="{{route('animais.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                       <h2 class="titulo">Cadastre o Seu Pet</h2>
                    <div class="input-group">
                        <div class="input-box">
                            <label form="raca" >Raça </label>
                            <input id="raca" type="text" name="raca" placeholder="Raça do pet" value="{{ old('raca') }}"> <!--required -->
                            @error('raca')
                                {{$message }}
                            @enderror
                        </div>

                        <div class="input-box">
                        <label form="porte" >Porte</label>
                            <select name="porte" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option selected>Escolha um Porte</option>
                                <option value="grande">Grande</option>
                                <option value="medio">Médio</option>
                                <option value="pequeno">Pequeno</option>
                            </select>
                            @error('porte')
                                {{$message }}
                            @enderror
                        </div>

                        <div class="input-box">
                            <label form="idade">Idade</label>
                            <input id="idade" type="number" name="idade" placeholder="Digite a idade" value="{{ old('idade') }}"><!--required -->
                            @error('idade')
                                {{$message }}
                            @enderror
                        </div>

                        <div class="input-box">
                            <label form="cor" >Cor</label>
                            <input id="cor" type="text" name="cor" placeholder ="Digite a Cor" value="{{ old('cor') }}"><!--required -->
                            @error('cor')
                                {{$message }}
                            @enderror
                        </div>

                        <div class="input-box">
                            <label form="Personalidade" >Personalidade</label>
                            <select name="personalidade" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option selected>Escolha uma Personalidade que defina seu PET</option>
                                <option value="calmo">Calmo</option>
                                <option value="temperamental">Temperamental</option>
                                <option value="estressado">Estressado</option>
                                <option value="timido">Timido</option>
                            </select>
                            @error('personalidade')
                                {{$message }}
                            @enderror
                        </div>

                        <div class="input-group">
                            <div class="input-box">
                                <label form="comorbidade" >Comorbidade</label>
                                <select name="comorbidade" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                    <option selected>Seu PET tem alguma comorbidade?</option>
                                    <option value="sim">Sim</option>
                                    <option value="nao">Não</option>
                                    <option value="naosei">Não Sei</option>
                                </select>
                            </div>
                            @error('comorbidade')
                                {{$message }}
                            @enderror
                        </div>

                    <div class="gender-inputs">
                        <div class="gender-title">
                            <h6>Genero</h6>
                        </div>
                        <div class="gender-group">
                            <div class="gender-input">
                                    <input class="select" type="radio" id="feminino" name="genero" value="feminino">
                                    <label for="feminino">Feminino</label>
                            </div>

                            <div class="gender-input">
                                <input class="select" type="radio" id="masculino" name="genero" value="masculino">
                                <label for="masculino">Masculino</label>
                            </div>
                        </div>
                        @error('genero')
                                {{$message }}
                        @enderror
                    </div>


                        <div class="input-box">
                            <label form="apelido" >Apelido</label>
                            <input id="apelido" type="text" name="apelido" placeholder ="Digite o apelido" value="{{ old('apelido') }}"><!--required -->
                            @error('apelido')
                                {{$message }}
                            @enderror
                        </div>


                        <div class="input-box">
                            <label form="foto" >Foto</label>
                            <input id="foto" type="file" name="foto" placeholder="Coloque uma foto">
                            @error('foto')
                                {{$message }}
                            @enderror
                        </div>
                    </div>

                    <div class="input-group">
                        <div class="gender-inputs">
                            <div class="gender-title">
                                <h6>Vacinado?</h6>
                            </div>
                            <div class="gender-group">
                                <div class="gender-input">
                                        <input class="select" type="radio" id="sim" name="vacina" value="sim">
                                        <label for="Sim">Sim</label>
                                </div>
                                <div class="gender-input">
                                    <input class="select" type="radio" id="nao" name="vacina" value="nao">
                                    <label for="Não">Não</label>
                                </div>
                            </div>
                            @error('vacina')
                                {{$message }}
                            @enderror
                        </div>

                        <div class="gender-inputs">
                            <div class="gender-title">
                                <h6>Castração</h6>
                            </div>
                            <div class="gender-group">
                                <div class="gender-input">
                                        <input class="select" type="radio" id="sim" name="castracao" value="sim">
                                        <label for="sim">Sim</label>
                                </div>
                                <div class="gender-input">
                                    <input class="select" type="radio" id="nao" name="castracao" value="nao">
                                    <label for="nao">Não</label>
                                </div>
                                @error('castracao')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="input-box">
                            <label form="localidade" >Localidade</label>
                            <input id="localidade" type="text" name="localidade" placeholder ="Digite a localidade" value="{{ old('localidade') }}"><!--required -->
                            @error('localidade')
                                {{$message }}
                            @enderror
                        </div>

                        <div class="input-box">
                            <label form="observacao" >Observação</label>
                            <input id="lobservacao" type="text" name="observacao" placeholder ="Digite uma observação" value="{{ old('observacao') }}"><!--required -->
                            @error('observacao')
                                {{$message }}
                            @enderror
                        </div>

                        <div class="continue-button" text="center">
                            <button type="submit">Continuar</button>
                        </div>
                            </div>

                    <br>

                </form>
            </div>
        </div>

    </body>
</html>
