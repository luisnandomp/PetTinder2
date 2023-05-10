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
                </div>

                <div class="col-4">
                    <select name="sexo" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option value='' selected>Todos os sexos</option>
                        <option value="masculino">Macho</option>
                        <option value="feminino">Femea</option>
                    </select>
                </div>

                <div class="col-4">
                    <select name="Castrado" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option value='' selected>Castrado</option>
                        <option value="masculino">Sim</option>
                        <option value="feminino">Não</option>
                    </select>
                </div>


                <div class="col-4">
                    <select name="Comorbidade" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option value='' selected>Comorbidade</option>
                        <option value="masculino">Sim</option>
                        <option value="feminino">Não</option>
                    </select>
                </div>

                <div class="col-4">
                    <select name="sexo" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option value='' selected>Vacina</option>
                        <option value="masculino">Sim</option>
                        <option value="feminino">Não</option>
                    </select>
                </div>
            </div>
        </div>
                <div> <input type="submit" class="btn btn-primary" value="Pesquisar"> </div>
    </form>

    @foreach ($publicacoes as $publicacao)
       <!-- <div class="border p-4 rounded">
           <h1>{{ $publicacao->animal->apelido }}</h1>
           <h1>{{ $publicacao->usuario->primeiro_nome }}</h1>
        </div>
    -->


        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $publicacao->animal->apelido }}</h5>
                      <p class="card-text">{{ $publicacao->usuario->primeiro_nome }}</p>
                      <a href="#" class="btn btn-primary">Meu Perfil</a>
                    </div>
                  </div>
            </div>
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{ $publicacao->animal->apelido }}</h5>
                      <p class="card-text">{{ $publicacao->usuario->primeiro_nome }}</p>
                      <a href="#" class="btn btn-primary">Meu Perfil</a>
                    </div>
                  </div>
            </div>
          </div>

    @endforeach

    {{ $publicacoes->links() }}
@endsection
