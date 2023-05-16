<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Usuário unico</title>
        @vite(['resources/scss/app.scss'])
    </head>
    <body>
        <div>
            <h1>Vizualização dos Animais</h1><br> <br>

            <ul>
                <li><strong>raca: </strong> {{$animal->raca}} </li>
                <li> <strong>porte: </strong>{{$animal->porte}}</li>
                <li><strong>idade: </strong>{{$animal->idade}}</li>
                <li><strong>cor: </strong>{{$animal->cor}}</li>
                <li><strong>personalidade: </strong>{{$animal->personalidade}}</li>
                <li><strong>comorbidade: </strong>{{$animal->comorbidade}}</li>
                <li><strong>genero: </strong>{{$animal->genero}}</li>
                <li><strong>apelido: </strong>{{$animal->apelido}}</li>
                <li><strong>foto:</strong><img width="100px" src="/storage/{{ $animal->foto }}" alt=""></li>
                <li><strong>vacina: </strong>{{$animal->vacina}}</li>
                <li><strong>castracao: </strong>{{$animal->castracao}}</li>
                <li><strong>localidade: </strong>{{$animal->localidade}}</li>
                <li><strong>observacao: </strong>{{$animal->observacao}}</li>
                <li><strong>data_cadastro: </strong>{{$animal->data_cadastro}}</li>
            </ul>

          <button type="button"><a href="{{route('animais.index')}}">voltar para lista de Animais</a></button>
          <button type="button"><a href="{{route('animais.create')}}">Cadastrar outro animal</a></button>

        </div>
    </body>
</html>
