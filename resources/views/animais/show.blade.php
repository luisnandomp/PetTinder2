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
                <li><strong>raca: </strong> {{$animal->raca}} </li>
                <li> <strong>porte: </strong>{{$animal->porte}}</li>
                <li><strong>idade: </strong>{{$animal->idade}}</li>
                <li><strong>cor: </strong>{{$animal->cor}}</li>
                <li><strong>personalidade: </strong>{{$animal->personalidade}}</li>
                <li><strong>comorbidade: </strong>{{$animal->comorbidade}}</li>
                <li><strong>genero: </strong>{{$animal->genero}}</li>
                <li><strong>apelido: </strong>{{$animal->apelido}}</li>
                <li><strong>vacina: </strong>{{$animal->vacina}}</li>
                <li><strong>castracao: </strong>{{$animal->castracao}}</li>
                <li><strong>localidade: </strong>{{$animal->localidade}}</li>
                <li><strong>observacao: </strong>{{$animal->observacao}}</li>

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
