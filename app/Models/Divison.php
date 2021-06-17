<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divison extends Model
{
    use HasFactory;
    public $timestamps=false;
    protected $table = 'divisions';

    protected $fillable = [

        'divison_name';
    ];
}
