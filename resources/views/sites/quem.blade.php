@extends('layout.padrao')

@section('conteudo')

    <div class="quem-somos">
        <div class="d-flex flex-row align-items-center">
            <div class="imagem">
                <img src="{{ asset('imagens/lindos.jpeg') }}" class="lindos">
            </div>

            <div class="conteudo">
                <h1> Quem Somos </h1>

                <h2 class="objetivo">
                    Somos alunos da Etec e cursamos Desenvolvimento de Sistemas, decidimos criar este projeto como a nossa conclusão deste curso. <br>
                    A ideia surgiu, pois com o aumento de casos de animais perdidos no município de Guararapes está aumentando a cada dia mais, com isso consequentemente os pets acabam ficando sem lar. Com a aplicação (sistema PET) os usuários têm a possibilidade de encontrar seu pet de forma mais fácil. Além disso existe muitos animais domésticos que estão abandonados nas ruas, que precisam de lar. O sistema viabiliza o auxílio de encontrar uma morada para o pet expondo todas as suas condições.
                    Com isso o objetivo do sistema é gerenciar e facilitar a adoção e a encontrar seu animal, seja resgatando ou pela adoção responsável. O Sistema possui a opção da interação entre os usuários fazendo  publicações, com o intuito de facilitar a comunicação entre eles.
                </h2>
            </div>
        </div>
    </div>

@endsection
