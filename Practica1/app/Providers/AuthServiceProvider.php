<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        
        $this->registerPolicies();
        
        Gate::define('pais-prueba', function(){
            return true;
        });
        
        Gate::define('crear-persona', 'App\Policies\PersonaPolicy@create');
        
        /* Funciona pero es sin policies
         * Gate::define('crear-persona', function($user){
            return $user->role == 'admin';
        });*/
        //
    }
}
