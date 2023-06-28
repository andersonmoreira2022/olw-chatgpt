<?php

namespace App\Policies;

use App\Models\ChamadoInterno;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ChamadoInternoPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $user->hasAnyRole(
            [   'super-administrator',
                'super_admin',
                'admin',
                'tecnico',
                'comercial',
                'supervisor',
                'financeiro',
                'administrator',
                'developer',
                'moderator',
                'user',
                'tester'
            ]
        );
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ChamadoInterno  $chamadoInterno
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, ChamadoInterno $chamadoInterno)
    {
        return $user->hasAnyRole(
            [
                'super-administrator',
                'super_admin',
                'admin',
                'tecnico',
                'comercial',
                'supervisor',
                'financeiro',
                'administrator',
                'developer',
                'moderator',
                'user',
                'tester'
            ]
        );
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->hasAnyRole(
            [
                'super-administrator',
                'super_admin',
                'admin',
                'tecnico',
                'comercial',
                'supervisor',
                'financeiro',
                'administrator',
                'developer',
                'moderator',
                'user',
                'tester'
            ]
        );
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ChamadoInterno  $chamadoInterno
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, ChamadoInterno $chamadoInterno)
    {
        return $user->hasAnyRole(
            [
                'super-administrator',
                'super_admin',
                'admin',
                'tecnico',
                'comercial',
                'supervisor',
                'financeiro',
                'administrator',
                'developer',
                'moderator',
                'user',
                'tester'
            ]
        );
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ChamadoInterno  $chamadoInterno
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, ChamadoInterno $chamadoInterno)
    {
        return $user->hasAnyRole(
            [
                'super-administrator',
                'super_admin',
                'administrator',
                'developer'
            ]
        );
    }
}
