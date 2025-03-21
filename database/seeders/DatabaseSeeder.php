<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //sini boleh panggil Seeder luar, tak payah btk kali seed.
        $this->call([
            UserSeeder::class,
            FlavorSeeder::class,
            DivisonSeeder::class,
            AgentSeeder::class,
        ]);
    }

}
