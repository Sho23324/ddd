<?php

namespace App\Providers;

use App\Repositories\Destination\DestinationRepository;
use App\Repositories\Destination\DestinationRepositoryInterface;
use App\Repositories\Hotel\HotelRepository;
use App\Repositories\Hotel\HotelRepositoryInterface;
use App\Repositories\Package\PackageRepository;
use App\Repositories\Package\PackageRepositoryInterface;
use App\Repositories\Payment\PaymentRepository;
use App\Repositories\Payment\PaymentRepositoryInterface;
use App\Repositories\Restaurant\RestaurantRepository;
use App\Repositories\Restaurant\RestaurantRepositoryInterface;
use App\Repositories\Review\ReviewRepository;
use App\Repositories\Review\ReviewRepositoryInterface;
use App\Repositories\Transportation\TransportationRepository;
use App\Repositories\Transportation\TransportationRepositoryInterface;
use App\Repositories\Trip\TripRepository;
use App\Repositories\Trip\TripRepositoryInterface;
use App\Repositories\User\UserRepository;
use App\Repositories\User\UserRepositoryInterface;
use App\Repository\JwtAuthRepository;
use App\Repository\JwtAuthRepositoryInterface;
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
        $this->app->singleton(HotelRepositoryInterface::class, HotelRepository::class);
        $this->app->singleton(RestaurantRepositoryInterface::class, RestaurantRepository::class);
        $this->app->singleton(PackageRepositoryInterface::class, PackageRepository::class);
        $this->app->singleton(TransportationRepositoryInterface::class, TransportationRepository::class);
        $this->app->singleton(ReviewRepositoryInterface::class,ReviewRepository::class);
        $this->app->singleton(DestinationRepositoryInterface::class,DestinationRepository::class);
        $this->app->singleton(PaymentRepositoryInterface::class,PaymentRepository::class);
        $this->app->singleton(JwtAuthRepositoryInterface::class,JwtAuthRepository::class);
    }
}
