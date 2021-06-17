<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DivisonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = array("Leader","Co-Leader","Dropship");   
        foreach($type as $t){
        DB::table('divisons')->insert([
            'divisons_name' => $t,
        ]);
        }
    }
}
