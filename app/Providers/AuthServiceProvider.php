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
        $this->registerPolicies();

        Gate::define('new-blog', function ($user) {
            return ($user->email == "JonZenor@gmail.com") ? true : false;
        });

        Gate::define('see-admin', function ($user) {
            return ($user->email == "JonZenor@gmail.com") ? true : false;
        });
    }
}
