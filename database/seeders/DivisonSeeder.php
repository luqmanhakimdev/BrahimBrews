<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DivisonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = array("Leader","Standard agent","Dropship");   
        foreach($type as $t){
        DB::table('divisons')->insert([
            'divison_name' => $t,
        ]);
        }
    }
}
