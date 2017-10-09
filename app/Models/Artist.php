<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
        'description',
        'preview',
        'city_id',
    ];    
}
