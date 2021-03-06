<?php

namespace Modules\Recipe\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RecipeDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

//        $this->call(TimesTableSeeder::class);
//        $this->call(PersonsTableSeeder::class);
//        $this->call(ComplexityTableSeeder::class);
        $this->call(RecipesTableSeeder::class);
    }
}
