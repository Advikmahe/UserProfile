<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buses extends Model
{
    protected $fillable=[
        'name',
        'busstop_id'
        
    ];
}
