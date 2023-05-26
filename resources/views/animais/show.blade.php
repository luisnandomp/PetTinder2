@extends('layout.padrao')


@section('conteudo')

<h1>Perfil de seus animais cadastrados</h1><br> <br>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
        <strong></strong><img width="100px" src="/storage/{{ $animal->foto }}" alt="" class="imagem">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"></h5>
        <p class="card-text"><ul>
            <ul class="list-group">
                <li class="list-group-item"><strong>Raça: </strong> {{$animal->raca}} </li>
                <li class="list-group-item"><strong>Porte: </strong>{{$animal->porte}}</li>
                <li class="list-group-item"><strong>Idade: </strong>{{$animal->idade}}</li>
                <li class="list-group-item"><strong>Cor: </strong>{{$animal->cor}}</li>
                <li class="list-group-item"><strong>Personalidade: </strong>{{$animal->personalidade}}</li>
                <li class="list-group-item"><strong>Comorbidade: </strong>{{$animal->comorbidade}} </li>
                <li class="list-group-item"><strong>Qual seu PET? </strong>{{$animal->pet}} </li>
                <li class="list-group-item"><strong>Gênero: </strong>{{$animal->genero}}</li>
                <li class="list-group-item"><strong>Apelido: </strong>{{$animal->apelido}}</li>
                <li class="list-group-item"><strong>Vacina: </strong>{{$animal->vacina}}</li>
                <li class="list-group-item"><strong>Castração: </strong>{{$animal->castracao}}</li>
                <li class="list-group-item"><strong>Localidade: </strong>{{$animal->localidade}}</li>
              </ul>
            </ul></small></p>
      </div>
    </div>
  </div>
</div>

          <button type="button" class="btn btn-success"><a href="{{route('animais.index')}}">voltar para lista de Animais</a></button>
          <button type="button" class="btn btn-success"><a href="{{route('animais.create')}}">Cadastrar outro animal</a></button>
            <style>
                .imagem{
                    height: 60%;
                    width: 80%;

                }

                .card-text{
                    padding-right: 25px;
                }
            </style>
@endsection
