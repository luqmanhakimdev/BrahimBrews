<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divison extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'divisons';

    protected $fillable = [

        'divison_name',
    ];

    public function agents(){
        return $this->hasMany(Agent::class);
    }
}
