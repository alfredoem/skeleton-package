<?php namespace Alfredoem\SkeletonPackage;

/**
 *
 * @author Alfredo Espiritu <alfredo.espiritum
 */

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

use Alfredoem\Skeletonpk\Console\Install;


class SkeletonpkServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred
     *
     * @var bool
     */
    protected $defer = false;

    public function boot()
    {
        $this->app->booted(function() {
            $this->defineRoutes();
        });

        $this->defineResources();
    }

    protected function defineRoutes()
    {
        if (! $this->app->routesAreCached()) {
            $router = app('router');

            $router->group(['namespace' => 'Alfredoem\SkeletonPackage\Http\Controllers'], function($router) {
               require __DIR__ . '/Http/routes.php';
            });
        }
    }

    protected function defineResources()
    {
        $this->loadViewsFrom(SKELETONPK_PATH . '/resources/views', 'SkeletonPackage');

        if ($this->app->runningInConsole()) {
            $this->publishes([
               SKELETONPK_PATH . '/resources/views' => base_path('resources/views/vendor/SkeletonPackage'),
            ]);

            $this->publishes([
                SKELETONPK_PATH . '/resources/views' => base_path('resources/views/vendor/SkeletonPackage'),
            ]);
        }
    }


    public function register()
    {
        if (! defined('SKELETONPK_PATH')) {
            define('SKELETONPK_PATH', realpath(__DIR__ . '/../'));
        }

        if (! class_exists('Skeletonpk')) {
            class_alias('Alfredoem\SkeletonPackage\SkeletonPackage', 'SkeletonPackage');
        }

        if ($this->app->runningInConsole()) {
            $this->commands([Install::class]);
        }
    }
}









