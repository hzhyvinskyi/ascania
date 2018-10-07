<?php

namespace Modules\Recipe\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Recipe\Entities\Recipe;

class RecipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Recipe::create([
            'times_id' => rand(1, 4),
            'persons_id' => rand(1, 4),
            'complexity_id' => rand(1, 4),
            'name' => 'testRecipe' . rand(1, 100),
            'image' => '/img/recipe_details/ingredient1.png',
            'text' => 'Default text ' . rand(1, 100),
        ]);
    }
}
