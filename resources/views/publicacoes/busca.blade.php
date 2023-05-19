@extends('layout.padrao')

@section('conteudo')
    <form action="{{ route('publicacoes.buscar') }}" method="POST">
        @csrf

        <div class="container overflow-hidden text-center">
            <div class="row gy-2">
                <div class="col-4">
                    <select name="porte" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option value='' selected>Qualquer tamanho</option>
                        <option value="pequeno"> Porte Pequeno</option>
                        <option value="medio">Porte Médio</option>
                        <option value="grande">Porte Grande</option>
                    </select>

                    @error('porte')
                        {{ $message }}
                    @enderror
                </div>

                <div class="col-4">
                    <select name="sexo" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option value='' selected>Todos os sexos</option>
                        <option value="masculino">Macho</option>
                        <option value="feminino">Femea</option>
                    </select>

                    @error('sexo')
                        {{ $message }}
                    @enderror
                </div>

                <div class="col-4">
                    <select name="castracao" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option value='' selected>Castrado</option>
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                    </select>

                    @error('porte')
                        {{ $message }}
                    @enderror
                </div>


                <div class="col-4">
                    <select name="comorbidade" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option value='' selected>Comorbidade</option>
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                    </select>

                    @error('comorbidade')
                        {{ $message }}
                    @enderror
                </div>

                <div class="col-4">
                    <select name="vacina" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option value='' selected>Vacina</option>
                        <option value="sim">Sim</option>
                        <option value="nao">Não</option>
                    </select>

                    @error('vacina')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div> <input type="submit" class="btn btn-primary" value="Pesquisar"> </div>
    </form>

    <div class="row g-3 justify-content-center my-3 p-4">
        @foreach ($publicacoes as $publicacao)
            <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                <div class="card shadow-sm">
                    <img height="250px" src="/storage/{{ $publicacao->foto }}" class="card-img-top" alt="...">

                    <div class="card-body">
                      <h5 class="card-title">{{ $publicacao->animal->apelido }}</h5>
                      <p class="card-text">{{ $publicacao->usuario->primeiro_nome }}</p>
                      <p class="card-text">{{ $publicacao->animal->porte }}</p>
                      <a href="{{route('animais.show', $publicacao->animal->id)}}" class="btn btn-primary">Meu Perfil</a>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>

    {{ $publicacoes->links() }}
@endsection
