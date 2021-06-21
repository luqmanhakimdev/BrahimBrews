<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Database\Seeders\Faker\Factory;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=\Faker\Factory::create();
        for($x=0;$x<20;$x++){
            DB::table('agents')->insert([       
                'name' => $faker->name(),
                'email' => $faker->email(),
                'ic' => $faker->unique()->numerify('######-##-####'),
                'city' => $faker->cityPrefix(),
                'state' => $faker->state(),
                'divison_id' => 2,
            ]);


        }
    }
}
