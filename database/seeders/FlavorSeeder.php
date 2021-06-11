<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class FlavorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        $flavor = array("Caramello Milk Tea","Chayen Milk Tea","Taro Temptation","Sweet Cornzs");   
        $row = 1;
        foreach($flavor as $x){
        DB::table('flavors')->insert([
            'id' => $row,
            'flavor_name' => $x
        ]);
        $row++;
        }
    }
}
