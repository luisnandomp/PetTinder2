@extends('layout.padrao')

@section('conteudo')

    <div class="row">
        <img src="{{ asset('imagens/lindos.jpeg') }}" class="lindos" alt="...">
        <div class="col">
            <h1> Quem Somos </h1>
            <h2 class="objetivo">Somos alunos da Etec e cursamos Desenvolvimento de Sistemas, decidimos criar este projeto como a nossa conclusão deste curso. A ideia surgiu, pois com o aumento de casos de animais perdidos no município de Guararapes está aumentando a cada dia mais, com isso consequentemente os pets acabam ficando sem lar. Com a aplicação (sistema PET) os usuários têm a possibilidade de encontrar seu pet de forma mais fácil. Além disso existe muitos animais domésticos que estão abandonados nas ruas, que precisam de lar. O sistema viabiliza o auxílio de encontrar uma morada para o pet expondo todas as suas condições.
                Com isso o objetivo do sistema é gerenciar e facilitar a adoção e a encontrar seu animal, seja resgatando ou pela adoção responsável. O Sistema possui a opção da interação entre os usuários fazendo postagens e por publicações, com o intuito de facilitar a comunicação entre os usuários. </h2>
        </div>
    </div>

@endsection