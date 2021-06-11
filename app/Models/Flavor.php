<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flavor extends Model
{
    use HasFactory;

    protected $fillable = [

        // sini untuk initialise nak keluarkan data apa dari DB. Satu table kena buat satu model. 
        'id',
        'flavor_name',
        'stock_in',
        'stock_out',
    ];
}
