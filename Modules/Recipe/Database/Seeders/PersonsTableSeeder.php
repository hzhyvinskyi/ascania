<?php

namespace Modules\Recipe\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Recipe\Entities\Person;

class PersonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Person::create([
            'amount_of_persons' => rand(0, 10)
        ]);
    }
}
