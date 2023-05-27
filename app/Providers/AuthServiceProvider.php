<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
       'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
       $this->registerPolicies();

        Gate::define('admin', function($user) {
            return $user->type == 0;
        });

        Gate::define('member', function($user) {
            return $user->type == 1;
        });
        Gate::define('manager', function($user) {
            return $user->type == 2;
        });
    }
}
