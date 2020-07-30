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
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        // $this->registerPolicies();

        // Gate::define('kepala-role', function($user){
        //     return $user->role == "kepala";
        // });

        // Gate::define('petugas-role', function($user){
        //     return $user->role == "petugas";
        // });

        // Gate::define('koordinator-role', function($user){
        //     return $user->role == "koordinator";
        // });
        // Gate::define('it-role', function($user){
        //     return $user->role == "it";
        // });

        //
    }
}
