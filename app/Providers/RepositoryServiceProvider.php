<?php

namespace App\Providers;

use App\Repositories\Posts\PostsInterface;
use App\Repositories\Posts\PostsRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(PostsInterface::class, PostsRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
