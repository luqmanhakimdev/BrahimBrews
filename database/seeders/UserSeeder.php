<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            
            'name' => 'John',
            'email' => 'john@bb.my',
            'password' => Hash::make('john@1234'),
            'city' => 'Shah Alam',
            'state' => 'Selangor',
        ]);
    }
}
