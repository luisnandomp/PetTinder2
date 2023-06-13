@extends('layout.padrao')

@section('conteudo')

@vite(['resources/scss/publicacao.scss'])
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
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" value="{{ $animal->porte }}">
                    <option selected>Grande</option>
                    <option selected>Médio</option>
                    <option selected>Pequeno</option>
                    </select>
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
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example" value="{{ $animal->personalidade }}">
                    <option selected>Calmo</option>
                    <option selected>Temperamental</option>
                    <option selected>Estressado</option>
                    <option selected>Tímido</option>
                    </select>
                </div>   
                <div class="col">
                    <label class="campo-animal">Comorbidade</label>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example"  value="{{ $animal->comorbidade }}">
                    <option selected>Sim</option>
                    <option selected>Não</option>
                    <option selected>Não sei</option>
                    </select>
                </div>   
                 <div class="col">
                    <label class="campo-animal">Espécie</label>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Cachorro</option>
                    <option selected>Gato</option>
                    </select>
                 </div>
                 <div class="col">
                    <label class="campo-animal">Gênero</label>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Fêmia</option>
                    <option selected>Macho</option>
                    </select>
                 </div>
                 <div class="col">
                    <label class="campo-animal">Vacina</label>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Sim</option>
                    <option selected>Não</option>
                    </select>
                 </div>
                 <div class="col">
                    <label class="campo-animal">Castração</label>
                    <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected>Sim</option>
                    <option selected>Não</option>
                    </select>
                 </div>
                 <div class="col">
                     <label class="campo-animal">Localização</label>
                    <input type="text" class="form-control" value="{{ $animal->localidade }}">
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
            <div>
              <button type="submit" class="edit-animal">Atualizar Animal</button>
            </div>
          </form>
@endsection
