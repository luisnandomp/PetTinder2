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
                <form action="{{route('animais.store')}}" method="POST">
                    @csrf
                    <div class="input-group">
                        <div class="input-box">
                            <label form="raca" >Raça </label>
                            <input id="raca" type="text" name="raca" placeholder="Raça do pet"> <!--required -->
                        @error('raca_animal')
                            {{$message }}
                        @enderror
                        </div>
                        <div class="input-box">
                        <label form="porte" >Porte</label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option selected>Escolha um Porte</option>
                            <option value="Grande">Grande</option>
                            <option value="Médio">Médio</option>
                            <option value="Pequeno">Pequeno</option>
                          </select>
                        </div>
                            <!-- <div class="input-box">
                                <label form="porte" >Porte </label>
                                <input id="porte" type="text" name="porte" placeholder="Digite o Porte">
                                @error('porte')
                                    {{$message }}
                                @enderror
                            </div> -->

                        <div class="input-box">
                            <label form="idade">Idade</label>
                            <input id="idade" type="number" name="idade" placeholder="Digite a idade"><!--required -->
                            @error('idade')
                                {{$message }}
                            @enderror
                        </div>

                        <div class="input-box">
                            <label form="cor" >Cor</label>
                            <input id="cor" type="text" name="cor" placeholder ="Digite a Cor"><!--required -->
                            @error('cor')
                                {{$message }}
                            @enderror
                        </div>

                        <div class="input-box">
                            <label form="Personalidade" >Personalidade</label>
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option selected>Escolha uma Personalidade que defina seu PET</option>
                                <option value="Calmo">Calmo</option>
                                <option value="temperamental">Temperamental</option>
                                <option value="estressado">Estressado</option>
                                <option value="timido">Timido</option>
                              </select>
                            </div>
                        <!-- <div class="input-box">
                            <label form="personalidade" >Personalidade</label>
                            <input id="personalidade" type="text" name="personalidade" placeholder ="Digite a personalidade"
                            @error('personalidade')
                                {{$message }}
                            @enderror
                        </div> -->

                        <div class="input-box">
                            <label form="comorbidade" >Comorbidade</label>
                            <input id="comorbidade" type="text" name="comorbidade" placeholder ="Digite a Comorbidade"><!--required -->
                            @error('comorbidade')
                                {{$message }}
                            @enderror
                        </div>

                    </div>

                    <div class="gender-inputs">

                        <div class="gender-title">
                            <h6>Genero</h6>
                        </div>

                        <div class="gender-group">
                        <div class="gender-input">
                                <input type="radio" id="feminino" name="genero" value="feminino">
                                <label for="feminino">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input type="radio" id="masculino" name="genero" value="masculino">
                            <label for="masculino">Masculino</label>
                    </div>
                        </div>


                        <div class="input-box">
                            <label form="apelido" >Apelido</label>
                            <input id="apelido" type="text" name="apelido" placeholder ="Digite o apelido"><!--required -->
                            @error('apelido')
                                {{$message }}
                            @enderror
                        </div>

                        <div class="input-box">
                            <label form="foto" >Foto </label>
                            <input id="foto" type="text" name="foto" placeholder="Informe a Foto"><!--required -->
                            @error('foto')
                                {{$message }}
                            @enderror
                        </div>

                        <div class="input-box">
                            <label form="vacina" >Vacina </label>
                            <input id="vacina" type="text" name="vacina" placeholder="Digite a vacina"><!--required -->
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
                                    <input type="radio" id="sim" name="castracao" value="sim">
                                    <label for="sim">Sim</label>
                            </div>

                            <div class="gender-input">
                                <input type="radio" id="nao" name="castracao" value="nao">
                                <label for="nao">Não</label>
                        </div>

                        <div class="input-box">
                            <label form="localidade" >Localidade</label>
                            <input id="localidade" type="text" name="localidade" placeholder ="Digite a localidade"><!--required -->
                            @error('localidade')
                                {{$message }}
                            @enderror
                        </div>

                        <div class="input-box">
                            <label form="observacao" >Observação</label>
                            <input id="lobservacao" type="text" name="observacao" placeholder ="Digite uma observação"><!--required -->
                            @error('observacao')
                                {{$message }}
                            @enderror
                        </div>

                        <div class="input-box">
                            <label form="data_cadastro" >Data De Cadastro</label>
                            <input id="data_cadastro" type="date" name="data_cadastro" placeholder ="Digite a data"><!--required -->
                            @error('data_cadastro')
                                {{$message }}
                            @enderror
                        </div>
                            </div>

                    <br>
                    <div class="continue-button" text="center">
                        <button>Continuar</button>
                    </div>
                </form>
            </div>
        </div>

    </body>
</html>
