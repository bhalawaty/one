<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $table = "buildings";
    protected $fillable = ['name', 'rooms', 'type', 'status', 'meta', 'small_description', 'long_description',
        'longitude', 'Latitude', 'user_id', 'square', 'rent', 'price', 'place'];
}
