<?php

namespace Modules\Recipe\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Recipe\Entities\Time;

class TimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        Time::create([
            'amount_of_time' => rand(0, 60)
        ]);
    }
}
