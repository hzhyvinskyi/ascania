<?php

namespace Modules\Recipe\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Core\Traits\CanPublishConfiguration;
use Modules\Core\Events\BuildingSidebar;
use Modules\Core\Events\LoadingBackendTranslations;
use Modules\Recipe\Events\Handlers\RegisterRecipeSidebar;

class RecipeServiceProvider extends ServiceProvider
{
    use CanPublishConfiguration;
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBindings();
        $this->app['events']->listen(BuildingSidebar::class, RegisterRecipeSidebar::class);

        $this->app['events']->listen(LoadingBackendTranslations::class, function (LoadingBackendTranslations $event) {
            $event->load('recipes', array_dot(trans('recipe::recipes')));
            $event->load('categories', array_dot(trans('recipe::categories')));
            $event->load('times', array_dot(trans('recipe::times')));
            $event->load('people', array_dot(trans('recipe::people')));
            $event->load('complexities', array_dot(trans('recipe::complexities')));
            // append translations





        });
    }

    public function boot()
    {
        $this->publishConfig('recipe', 'permissions');

        $this->loadMigrationsFrom(__DIR__ . '/../Database/Migrations');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

    private function registerBindings()
    {
        $this->app->bind(
            'Modules\Recipe\Repositories\RecipeRepository',
            function () {
                $repository = new \Modules\Recipe\Repositories\Eloquent\EloquentRecipeRepository(new \Modules\Recipe\Entities\Recipe());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Recipe\Repositories\Cache\CacheRecipeDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Recipe\Repositories\CategoryRepository',
            function () {
                $repository = new \Modules\Recipe\Repositories\Eloquent\EloquentCategoryRepository(new \Modules\Recipe\Entities\Category());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Recipe\Repositories\Cache\CacheCategoryDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Recipe\Repositories\TimeRepository',
            function () {
                $repository = new \Modules\Recipe\Repositories\Eloquent\EloquentTimeRepository(new \Modules\Recipe\Entities\Time());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Recipe\Repositories\Cache\CacheTimeDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Recipe\Repositories\PersonRepository',
            function () {
                $repository = new \Modules\Recipe\Repositories\Eloquent\EloquentPersonRepository(new \Modules\Recipe\Entities\Person());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Recipe\Repositories\Cache\CachePersonDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Recipe\Repositories\ComplexityRepository',
            function () {
                $repository = new \Modules\Recipe\Repositories\Eloquent\EloquentComplexityRepository(new \Modules\Recipe\Entities\Complexity());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Recipe\Repositories\Cache\CacheComplexityDecorator($repository);
            }
        );
// add bindings





    }
}
