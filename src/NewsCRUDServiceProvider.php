<?php

namespace Backpack\NewsCRUD;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class NewsCRUDServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        // publish routes
        $this->publishes([__DIR__.'/routes' => base_path('routes')], 'routes');

        // publish app
        $this->publishes([__DIR__.'/app' => app_path('')], 'app');

        // publish resources
        $this->publishes([__DIR__.'/resources' => resource_path('')], 'resources');

        // publish migrations
        $this->publishes([__DIR__.'/database' => database_path('migrations')], 'migrations');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        // register its dependencies
        $this->app->register(\Cviebrock\EloquentSluggable\ServiceProvider::class);
    }
}
