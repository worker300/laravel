<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('isAdmin' , function (User $user){
            return $user->role === 'admin';
        });
        
        Gate::define('view-profile' , function (User $user,$profileuser){
            return $user->id === $profileuser;
        });
        
        Gate::define('update-post' , function (User $user, $targetuser){
            return $user->id === $targetuser;
        });
        
        Gate::define('delete-post' , function (User $user, $targetuser){
            return $user->id === $targetuser;
        });



        // run before any gate listed above
        // Gate::before(function ( User $user){
        //     echo "Before gate";
        // });

        // Gate::after(function ( User $user){
        //     echo "After gate";
        // });


    }
}
