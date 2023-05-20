<?php

namespace App\Policies;

use App\Models\Usuario;
use Illuminate\Auth\Access\HandlesAuthorization;

class UsuarioPolicy
{
    use HandlesAuthorization;
    public function editar(Usuario $usuario)
    {
        if(!$usuario->usuario->is($usuario)){
            return Response::deny('Você não tem permissão para editar essa publicação');
        }

        return Response::allow();
    }

    public function criar(Usuario $usuario)
    {
        return Response::allow();
    }
}
