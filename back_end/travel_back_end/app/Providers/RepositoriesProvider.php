<?php

namespace App\Providers;

use App\Repositories\Trip\TripRepository;
use App\Repositories\Trip\TripRepositoryInterface;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoriesProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->app->singleton(UserRepositoryInterface::class, UserRepository::class);
        $this->app->singleton(TripRepositoryInterface::class, TripRepository::class);
    }
}
