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
                    <input type="submit" class="btn btn-primary" value="Pesquisar">
                </div>

                {{-- <div class="col-4">
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-4">
                    <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div> --}}
            </div>
        </div>
    </form>

    @foreach ($publicacoes as $publicacao)
        <div class="border p-4 rounded">
           <h1>{{ $publicacao->animal->apelido }}</h1>
           <h1>{{ $publicacao->usuario->primeiro_nome }}</h1>
        </div>
    @endforeach

    {{ $publicacoes->links() }}
@endsection
