@extends('layout.padrao')

@section('conteudo')

@vite(['resources/scss/publicacao.scss'])
<div class="editar">

        <form action="{{ route('animais.update', $animal->id) }}" method="POST" class="editar">
            <h1 aling="center">Edite aqui o Seu lindo e cheiroso Animalzinho {{ $animal->id }}</h1>

            @csrf
            @method('PUT')
            
            <div class="input-group">
                <div class="input-box">
                    <label form="raca" >Raça </label>
                    <input id="raca" type="text" name="raca" value="{{ $animal->raca }}"> <!--required -->
                </div>

                <div class="input-box">
                    <label form="porte" >Porte </label>
                    <input id="porte" type="text" name="porte" value="{{ $animal->porte }}"><!--required -->
                </div>

                <div class="input-box">
                    <label form="idade">Idade</label>
                    <input id="idade" type="number" name="idade" value="{{ $animal->idade }}"><!--required -->
                </div>

                <div class="input-box">
                    <label form="cor" >Cor</label>
                    <input id="cor" type="text" name="cor" value="{{ $animal->cor }}"><!--required -->
                </div>

                <div class="input-box">
                    <label form="personalidade" >Personalidade</label>
                    <input id="personalidade" type="text" name="personalidade" value="{{ $animal->personalidade }}"><!--required -->
                </div>

                <div class="input-box">
                    <label form="comorbidade" >Comorbidade</label>
                    <input id="comorbidade" type="text" name="comorbidade" value="{{ $animal->comorbidade }}"><!--required -->
                </div>

            </div>

            <div class="gender-inputs">

                <div class="gender-title">
                    <h6>Genero</h6>
                </div>

                <div class="gender-group">
                <div class="gender-input">
                        <input type="radio" id="feminino" name="genero" value="feminino" {{ $animal->genero == 'feminino' ? 'checked' : '' }}>
                        <label for="feminino">Feminino</label>
                </div>

                <div class="gender-input">
                    <input type="radio" id="masculino" name="genero" value="masculino" {{ $animal->genero == 'masculino' ? 'checked' : '' }}>
                    <label for="masculino">Masculino</label>
            </div>
                </div>
            </div>

                <div class="input-box">
                    <label form="apelido" >Apelido</label>
                    <input id="apelido" type="text" name="apelido" value="{{ $animal->apelido }}"><!--required -->
                </div>


                <div class="input-box">
                    <label for="">Foto(s): </label>
                    <img width="75px" height="75px" src="/storage/{{ $animal->foto }}" alt=""> <br>
                    <label for="">Adicionar Foto</label> <br>
                  <input type="file" name=" foto" value="{{ $animal->foto }}">
                </div>

                {{-- <div class="input-box">
                    <label form="foto" >Foto </label>
                    <input id="foto" type="file" name="foto" value="{{ $animal->foto }}"><!--required -->
                </div> --}}

                <div class="input-box">
                    <label form="vacina" >Vacina </label>
                    <input id="vacina" type="text" name="vacina" value="{{ $animal->vacina }}"><!--required -->
                </div>

                <div class="gender-inputs">

                    <div class="gender-title">
                        <h6>Castração</h6>
                    </div>

                    <div class="gender-group">
                    <div class="gender-input">
                        <input type="radio" id="sim" name="castracao" value="sim" {{ $animal->castracao == 'sim' ? 'checked' : '' }}>
                        <label for="sim">Sim</label>
                    </div>

                    <div class="gender-input">
                        <input type="radio" id="nao" name="castracao" value="nao" {{ $animal->castracao == 'nao' ? 'checked' : '' }}>
                        <label for="nao">Não</label>
                </div>

                <div class="input-box">
                    <label form="localidade" >Localidade</label>
                    <input id="localidade" type="text" name="localidade" value="{{ $animal->localidade }}"><!--required -->
                </div>

                <div class="input-box">
                    <label form="observacao" >Observação</label>
                    <input id="lobservacao" type="text" name="observacao" value="{{ $animal->observacao }}"><!--required -->
                </div>
            <div>
              <button type="submit">Atualizar Animal</button>
            </div>
          </form>
</div>


    
@endsection
