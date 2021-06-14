<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AgentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('agents')->insert([
            
            'name' => 'Muhammad Zul',
            'email' => 'zul@bb.my',
            'ic' => '980912084567',
            'city' => 'Shah Alam',
            'state' => 'Selangor',
        ]);
    }
}
