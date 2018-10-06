<?php

return [
    'recipe.recipes' => [
        'index' => 'recipe::recipes.list resource',
        'create' => 'recipe::recipes.create resource',
        'edit' => 'recipe::recipes.edit resource',
        'destroy' => 'recipe::recipes.destroy resource',
    ],
    'recipe.categories' => [
        'index' => 'recipe::categories.list resource',
        'create' => 'recipe::categories.create resource',
        'edit' => 'recipe::categories.edit resource',
        'destroy' => 'recipe::categories.destroy resource',
    ],
    'recipe.times' => [
        'index' => 'recipe::times.list resource',
        'create' => 'recipe::times.create resource',
        'edit' => 'recipe::times.edit resource',
        'destroy' => 'recipe::times.destroy resource',
    ],
    'recipe.people' => [
        'index' => 'recipe::people.list resource',
        'create' => 'recipe::people.create resource',
        'edit' => 'recipe::people.edit resource',
        'destroy' => 'recipe::people.destroy resource',
    ],
    'recipe.complexities' => [
        'index' => 'recipe::complexities.list resource',
        'create' => 'recipe::complexities.create resource',
        'edit' => 'recipe::complexities.edit resource',
        'destroy' => 'recipe::complexities.destroy resource',
    ],
// append





];
