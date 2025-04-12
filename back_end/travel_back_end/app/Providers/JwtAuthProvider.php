<?php

namespace App\Providers;

use App\Repository\jwtAuthRepository;
use App\Repository\JwtAuthRepositoryInterface;

use Illuminate\Support\ServiceProvider;

class JwtAuthProvider extends ServiceProvider
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
        $this->app->singleton(JwtAuthRepositoryInterface::class,jwtAuthRepository::class);
    }
}
