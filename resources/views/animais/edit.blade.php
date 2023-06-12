@extends('layout.padrao')

@section('conteudo')

@vite(['resources/scss/publicacao.scss'])
<div class="editar">

        <form action="{{ route('animais.update', $animal->id) }}" method="POST" class="editar" enctype="multipart/form-data">
            <h1 aling="center" class="titulo-edit">{{ $animal->apelido }}</h1>

            @csrf
            @method('PUT')

        <div class="container text-center">
            <div class="row row-cols-2">
                <div class="col">
                    <label class="campo-animal">Apelido</label>
                    <input type="text" class="form-control" value="{{ $animal->apelido }}">
                 </div>
                <div class="col">
                    <label class="campo-animal">Raça</label>
                    <input type="text" class="form-control" value="{{ $animal->raca }}">
                </div>
                <div class="col">
                    <label class="campo-animal">Porte</label>
                    <input type="text" class="form-control" value="{{ $animal->porte }}">
                </div>
                <div class="col">
                     <label class="campo-animal">Idade</label>
                    <input type="text" class="form-control" value="{{ $animal->idade }}">
                </div>
                <div class="col">
                    <label class="campo-animal">Cor</label>
                    <input type="text" class="form-control" value="{{ $animal->cor }}">
                 </div>
                <div class="col">
                    <label class="campo-animal">Personalidade</label>
                    <input type="text" class="form-control" value="{{ $animal->personalidade }}">
                </div>
                <div class="col">
                    <label class="campo-animal">Comorbidade</label>
                    <input type="text" class="form-control" value="{{ $animal->comorbidade }}">
                 </div>
                 <div class="col">
                    <label class="campo-animal">Espécie</label>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="cachorro" name="pet" value="cachorro">
                    <option selected>Cachorro</option>
                    <option selected>Gato</option>
                    </select>
                 </div>
                 <div class="col">
                    <label class="campo-animal">Gênero</label>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" id="cachorro" name="pet" value="cachorro">
                    <option selected>Fêmia</option>
                    <option selected>Macho</option>
                    </select>
                 </div>


            </div>
         </div>

                <div class="input-box">
                    <label for="">Foto(s): </label>
                    <img width="75px" height="75px" src="/storage/{{ $animal->foto }}" alt=""> <br>
                    <label for="">Trocar a foto Foto</label> <br>
                    <input id="foto" type="file" name=" foto">
                </div>

                {{-- <div class="input-box">
                    <label form="foto" >Foto </label>
                    <input id="foto" type="file" name="foto" value="{{ $animal->foto }}"><!--required -->
                </div> --}}

                <div class="col">
                <label >Vacina</label>
                <input type="text" class="form-control" value="{{ $animal->vacina }}">
            </div>

                <div class="col">
                    <div class="gender-title">
                        <h6 class="campo-animal">Castração</h6>
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

                <div class="col">
                <label class="campo-animal">Localização</label>
                <input type="text" class="form-control" value="{{ $animal->localidade }}">
            </div>
            <div>
              <button type="submit" class="edit-animal">Atualizar Animal</button>
            </div>
          </form>
</div>
                </div>


@endsection
