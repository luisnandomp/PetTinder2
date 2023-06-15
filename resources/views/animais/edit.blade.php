@extends('layout.padrao')

@section('conteudo')

@vite(['resources/scss/publicacao.scss'])
<form action="{{ route('animais.update', $animal->id) }}" method="POST" class="editar" enctype="multipart/form-data">
    <h1 aling="center" class="titulo-edit">{{ $animal->apelido }}</h1>

    @csrf
    @method('PUT')

    <div class="input-box">
        <img width="20%" height="20%" src="/storage/{{ $animal->foto }}" alt="" class="img-edit"> <br>
        <input id="foto" type="file" name=" foto">
    </div>

    {{-- <div class="input-box">
                    <label form="foto" class="escolha">Foto </label>
                    <input id="foto" type="file" name="foto" value="{{ $animal->foto }}"><!--required -->
    </div> --}}
    <div>

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
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option {{ $animal->porte == 'grande' ? 'selected' : '' }} value="grande">Grande</option>
                    <option {{ $animal->porte == 'medio' ? 'selected' : '' }} value="medio">Médio</option>
                    <option {{ $animal->porte == 'pequeno' ? 'selected' : '' }} value="pequeno">Pequeno</option>
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
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option {{ $animal->personalidade == 'calmo' ? 'selected' : '' }} value="calmo">Calmo</option>
                    <option {{ $animal->personalidade == 'temperamental' ? 'selected' : '' }} value="temperamental">Temperamental</option>
                    <option {{ $animal->personalidade == 'estressado' ? 'selected' : '' }} value="estressado">Estressado</option>
                    <option {{ $animal->personalidade == 'timido' ? 'selected' : '' }} value="timido">Tímido</option>
                </select>
            </div>
            <div class="col">
                <label class="campo-animal">Comorbidade</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" value="{{ $animal->comorbidade }}">
                    <option {{ $animal->comorbidade == 'sim' ? 'selected' : '' }} value="sim">Sim</option>
                    <option {{ $animal->comorbidade == 'nao' ? 'selected' : '' }} value="nao">Não</option>
                    <option {{ $animal->comorbidade == 'nao sei' ? 'selected' : '' }} value="nao sei">Não sei</option>
                </select>
            </div>
            <div class="col">
                <label class="campo-animal">Espécie</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option {{ $animal->pet == 'cachorro' ? 'selected' : '' }} value="cachorro">Cachorro</option>
                    <option {{ $animal->pet == 'gato' ? 'selected' : '' }} value="gato">Gato</option>
                </select>
            </div>
            <div class="col">
                <label class="campo-animal">Gênero</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option {{ $animal->genero == 'feminino' ? 'selected' : '' }} value="feminino">Fêmia</option>
                    <option {{ $animal->genero == 'masculino' ? 'selected' : '' }} value="masculino">Macho</option>
                </select>
            </div>
            <div class="col">
                <label class="campo-animal">Vacina</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option {{ $animal->vacina == 'sim' ? 'selected' : '' }} value="sim">Sim</option>
                    <option {{ $animal->vacina == 'nao' ? 'selected' : '' }} value="nao">Não</option>
                </select>
            </div>
            <div class="col">
                <label class="campo-animal">Castração</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option {{ $animal->castracao == 'sim' ? 'selected' : '' }} value="sim">Sim</option>
                    <option {{ $animal->castracao == 'nao' ? 'selected' : '' }} value="nao">Não</option>
                </select>
            </div>
            <div class="col">
                <label class="campo-animal">Localização</label>
                <input type="text" class="form-control" value="{{ $animal->localidade }}">
            </div>
        </div>
    </div>
        <button type="submit" class="edit-animal">Atualizar Animal</button>
    </div>
</form>
@endsection
