<?php

namespace Modules\Recipe\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Recipe\Entities\Complexity;

class ComplexityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Complexity::create([
            'complexity_level' => str_random(8)
        ]);
    }
}
