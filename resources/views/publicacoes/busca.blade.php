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

                <!-- testando -->
                <div class="col-4">
                    <select name="pet" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option value='' selected>Ambos</option>
                        <option value="cachorro">Cachorro</option>
                        <option value="gato">Gato</option>
                    </select>

                    @error('pet')
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

                        <div>
                            <input type="submit" class="btn btn-primary" value="Pesquisar" class="btn">


                        </div>
                    </select>




                    <br>

                    <a href="{{ route('animais.create') }}"><button type="button" class="btn btn-success">Cadastre um
                            Animal Novo</button></a>

                    @error('vacina')
                        {{ $message }}
                    @enderror
                </div>
            </div>
        </div>

    </form>

    <div class="inicial">
        <div class="row g-3 justify-content-center my-3 p-4">
            @foreach ($publicacoes as $publicacao)
                <div class="col-12 col-md-6 col-lg-4 col-xl-3">

                    <div class="card shadow-sm h-100">
                        <img height="250px" src="/storage/{{ $publicacao->animal->foto }}" class="card-img-top"
                            alt="...">

                        <div class="card-home">
                            <h5 class="card-title">{{ $publicacao->animal->apelido }}</h5>
                        </div>
                        <div class="descricao">
                            <div class="container text-center">
                                <div class="row row-cols-auto">

                                    <ul class="flex flex-wrap gap-2">
                                        <li class="badge badge-large bg-primary bg-opacity-10 text-primary">
                                            {{ $publicacao->animal->genero }}</li>
                                        <li class="badge badge-large bg-primary bg-opacity-10 text-primary">
                                            {{ $publicacao->animal->porte }}</li>
                                        <li class="badge badge-large bg-primary bg-opacity-10 text-primary">
                                            {{ $publicacao->animal->personalidade }}</li>
                                    </ul>

                                </div>
                            </div class="tituloo">
                            <div class="botao-perfil">
                                <a href="{{ route('animais.show', $publicacao->animal->id) }}">Meu Perfil</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            <div class="col-12">
                <div class="d-flex justify-content-center">
                    {{ $publicacoes->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
