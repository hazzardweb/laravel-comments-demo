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

        /**
         * Determine if the current user can access the admin panel.
         *
         * @param  \App\Models\User $user
         * @return bool
         */
        Gate::define('moderate-comments', function ($user) {
            return $user->email === 'demo@example.com' || $user->email === 'me@cretueusebiu.com';
        });
    }
}
