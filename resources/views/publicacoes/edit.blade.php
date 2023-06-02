@extends('layout.padrao')

@section('conteudo')
<div class="editar">
        <form action="{{ route('publicacoes.update', $publicacao->id) }}" method="POST" >
            <h1 aling="center" class="titulo">Edite a publicação do seu animal {{ $publicacao->animal->apelido }}</h1>

            @csrf
            @method('PUT')

            <div class="mb-3" class="form-label">
              <label for="exampleInputPassword1" class="form-label">Descrição</label>
            <input type="string" name="descricao" value="{{ $publicacao->descricao }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            {{-- <div class="mb-3" class="form-label">
                <label for="exampleInputPassword1" class="form-label">Foto(s): </label>
                <img width="100px" src="/storage/{{ $publicacao->foto }}" alt=""> <br>
                <label for="">Adicionar Foto</label> <br>
              <input type="file" name="foto"value="{{ $publicacao->foto }}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div> --}}


            <div class="mb-3" class="form-label">
              <button type="submit">Atualizar Usuário</button>
            </div>
          </form>

</div>


@endsection
