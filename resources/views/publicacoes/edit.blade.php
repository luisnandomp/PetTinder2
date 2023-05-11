@extends('layout.padrao')

@section('conteudo')
        <form action="{{ route('publicacoes.update', $publicacao->id) }}" method="POST">
            <h1 aling="center">Edite aqui o Seu lindo e cheiroso Usuáriozinho {{ $publicacao->id }}</h1>

            @csrf
            @method('PUT')

            <div>
              <label>Descrição</label>
            <input type="string" name="descricao" value="{{ $publicacao->descricao }}">
            </div>

            <div>
                <label for="">Foto(s): </label>
                <img width="100px" src="/storage/{{ $publicacao->foto }}" alt=""> <br>
                <label for="">Adicionar Foto</label> <br>
              <input type="file" name="foto"value="{{ $publicacao->foto }}">
            </div>

            <div>
              <label for="">ID_usuário</label>
              <input type="number" name="id_usuario" value="{{ $publicacao->id_usuario }}">
            </div>
            <div>
                <label for="">id_animal</label>
                <input type="number" name="id_animal" value="{{ $publicacao->id_animal }}">
              </div>

            <div>
              <button type="submit">Atualizar Usuário</button>
            </div>
          </form>
@endsection
