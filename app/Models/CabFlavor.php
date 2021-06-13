<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CabFlavor extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'flavors';

    protected $fillable = [

        // sini untuk initialise nak keluarkan data apa dari DB. Satu table kena buat satu model. 
        'flavor_name',
        'stock',
    ];
}
