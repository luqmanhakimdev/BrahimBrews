<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agent extends Model
{
    use HasFactory;
    public $timestamps=true;
    protected $table = 'agents';

    protected $fillable = [

        // sini untuk initialise nak keluarkan data apa dari DB. Satu table kena buat satu model. 
        'name',
        'email',
        'ic',
        'city',
        'state',
        'divison_id',
        
    ];

    public function divison(){
        return $this->belongsTo(Divison::class);
    }
}
