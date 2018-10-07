<?php

use Illuminate\Routing\Router;
/** @var Router $router */

$router->group(['prefix' => '/recipes'], function (Router $router) {
    $router->get('', 'RecipeController@index');
    $router->get('show/{id}', 'RecipeController@show');
});
