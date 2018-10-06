<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' =>'/recipe'], function (Router $router) {
    $router->bind('recipe', function ($id) {
        return app('Modules\Recipe\Repositories\RecipeRepository')->find($id);
    });
    $router->get('recipes', [
        'as' => 'admin.recipe.recipe.index',
        'uses' => 'RecipeController@index',
        'middleware' => 'can:recipe.recipes.index'
    ]);
    $router->get('recipes/create', [
        'as' => 'admin.recipe.recipe.create',
        'uses' => 'RecipeController@create',
        'middleware' => 'can:recipe.recipes.create'
    ]);
    $router->post('recipes', [
        'as' => 'admin.recipe.recipe.store',
        'uses' => 'RecipeController@store',
        'middleware' => 'can:recipe.recipes.create'
    ]);
    $router->get('recipes/{recipe}/edit', [
        'as' => 'admin.recipe.recipe.edit',
        'uses' => 'RecipeController@edit',
        'middleware' => 'can:recipe.recipes.edit'
    ]);
    $router->put('recipes/{recipe}', [
        'as' => 'admin.recipe.recipe.update',
        'uses' => 'RecipeController@update',
        'middleware' => 'can:recipe.recipes.edit'
    ]);
    $router->delete('recipes/{recipe}', [
        'as' => 'admin.recipe.recipe.destroy',
        'uses' => 'RecipeController@destroy',
        'middleware' => 'can:recipe.recipes.destroy'
    ]);
    $router->bind('category', function ($id) {
        return app('Modules\Recipe\Repositories\CategoryRepository')->find($id);
    });
    $router->get('categories', [
        'as' => 'admin.recipe.category.index',
        'uses' => 'CategoryController@index',
        'middleware' => 'can:recipe.categories.index'
    ]);
    $router->get('categories/create', [
        'as' => 'admin.recipe.category.create',
        'uses' => 'CategoryController@create',
        'middleware' => 'can:recipe.categories.create'
    ]);
    $router->post('categories', [
        'as' => 'admin.recipe.category.store',
        'uses' => 'CategoryController@store',
        'middleware' => 'can:recipe.categories.create'
    ]);
    $router->get('categories/{category}/edit', [
        'as' => 'admin.recipe.category.edit',
        'uses' => 'CategoryController@edit',
        'middleware' => 'can:recipe.categories.edit'
    ]);
    $router->put('categories/{category}', [
        'as' => 'admin.recipe.category.update',
        'uses' => 'CategoryController@update',
        'middleware' => 'can:recipe.categories.edit'
    ]);
    $router->delete('categories/{category}', [
        'as' => 'admin.recipe.category.destroy',
        'uses' => 'CategoryController@destroy',
        'middleware' => 'can:recipe.categories.destroy'
    ]);
    $router->bind('time', function ($id) {
        return app('Modules\Recipe\Repositories\TimeRepository')->find($id);
    });
    $router->get('times', [
        'as' => 'admin.recipe.time.index',
        'uses' => 'TimeController@index',
        'middleware' => 'can:recipe.times.index'
    ]);
    $router->get('times/create', [
        'as' => 'admin.recipe.time.create',
        'uses' => 'TimeController@create',
        'middleware' => 'can:recipe.times.create'
    ]);
    $router->post('times', [
        'as' => 'admin.recipe.time.store',
        'uses' => 'TimeController@store',
        'middleware' => 'can:recipe.times.create'
    ]);
    $router->get('times/{time}/edit', [
        'as' => 'admin.recipe.time.edit',
        'uses' => 'TimeController@edit',
        'middleware' => 'can:recipe.times.edit'
    ]);
    $router->put('times/{time}', [
        'as' => 'admin.recipe.time.update',
        'uses' => 'TimeController@update',
        'middleware' => 'can:recipe.times.edit'
    ]);
    $router->delete('times/{time}', [
        'as' => 'admin.recipe.time.destroy',
        'uses' => 'TimeController@destroy',
        'middleware' => 'can:recipe.times.destroy'
    ]);
    $router->bind('person', function ($id) {
        return app('Modules\Recipe\Repositories\PersonRepository')->find($id);
    });
    $router->get('people', [
        'as' => 'admin.recipe.person.index',
        'uses' => 'PersonController@index',
        'middleware' => 'can:recipe.people.index'
    ]);
    $router->get('people/create', [
        'as' => 'admin.recipe.person.create',
        'uses' => 'PersonController@create',
        'middleware' => 'can:recipe.people.create'
    ]);
    $router->post('people', [
        'as' => 'admin.recipe.person.store',
        'uses' => 'PersonController@store',
        'middleware' => 'can:recipe.people.create'
    ]);
    $router->get('people/{person}/edit', [
        'as' => 'admin.recipe.person.edit',
        'uses' => 'PersonController@edit',
        'middleware' => 'can:recipe.people.edit'
    ]);
    $router->put('people/{person}', [
        'as' => 'admin.recipe.person.update',
        'uses' => 'PersonController@update',
        'middleware' => 'can:recipe.people.edit'
    ]);
    $router->delete('people/{person}', [
        'as' => 'admin.recipe.person.destroy',
        'uses' => 'PersonController@destroy',
        'middleware' => 'can:recipe.people.destroy'
    ]);
    $router->bind('complexity', function ($id) {
        return app('Modules\Recipe\Repositories\ComplexityRepository')->find($id);
    });
    $router->get('complexities', [
        'as' => 'admin.recipe.complexity.index',
        'uses' => 'ComplexityController@index',
        'middleware' => 'can:recipe.complexities.index'
    ]);
    $router->get('complexities/create', [
        'as' => 'admin.recipe.complexity.create',
        'uses' => 'ComplexityController@create',
        'middleware' => 'can:recipe.complexities.create'
    ]);
    $router->post('complexities', [
        'as' => 'admin.recipe.complexity.store',
        'uses' => 'ComplexityController@store',
        'middleware' => 'can:recipe.complexities.create'
    ]);
    $router->get('complexities/{complexity}/edit', [
        'as' => 'admin.recipe.complexity.edit',
        'uses' => 'ComplexityController@edit',
        'middleware' => 'can:recipe.complexities.edit'
    ]);
    $router->put('complexities/{complexity}', [
        'as' => 'admin.recipe.complexity.update',
        'uses' => 'ComplexityController@update',
        'middleware' => 'can:recipe.complexities.edit'
    ]);
    $router->delete('complexities/{complexity}', [
        'as' => 'admin.recipe.complexity.destroy',
        'uses' => 'ComplexityController@destroy',
        'middleware' => 'can:recipe.complexities.destroy'
    ]);
// append





});
