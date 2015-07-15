<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Users\Data\Repositories\User;
use PragmaRX\Sdk\Services\Users\Data\Contracts\UserRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(UserRepository::class, User::class);
    }
}
