<?php

namespace App\Policies;

use App\Models\Animal;
use App\Models\Usuario;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class AnimalPolicy
{
    use HandlesAuthorization;

    public function editar(Usuario $usuario, Animal $animal)
    {
        if(!$animal->usuario->is($usuario)){
            return Response::deny('Você não tem permissão para editar essa publicação');
        }

        return Response::allow();
    }

    public function criar(Usuario $usuario)
    {
        return Response::allow();
    }
}
