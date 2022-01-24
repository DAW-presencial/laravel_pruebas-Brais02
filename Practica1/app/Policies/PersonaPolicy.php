<?php

namespace App\Policies;

use App\Models\Persona;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PersonaPolicy {

    use HandlesAuthorization;
    
    /* Con esto definimos que antes de nada compruebe que nuestro
     * usuario tenga el rol de admin, en ese caso devuelve true 
     * para todo, pero tiene que estar metido en el IF para
     * que solo devuelva true si es cierto y no puede devolver
     * false porque se cargaria el resto de comprobaciones.
     */
    public function before($user, $ability) {
        if($user->role == 'admin'){
            return true;
        }
    }
    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user) {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Persona $persona) {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user) {
        return $user->role == 'admin';
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Persona $persona) {

        /* Lo que se suele hacer es además de mirar si eres admin
         * que el usuario tenga la misma ID que la persona que creo
         * esa persona (para asegurarse de que solo el que la creo
         * pueda actualizarlo). Ejemplo:
         * 
         * return $user->role == 'admin' || $user->id == $persona->user_id;
         */
        return $user->role == 'admin';
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Persona $persona) {
        return $user->role == 'admin';
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Persona $persona) {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Persona $persona) {
        //
    }

}
