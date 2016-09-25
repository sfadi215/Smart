<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RainSensor extends Model
{
    //
    protected $fillable = ['raining'];

    // not needed
    public function scopeGetLatest($query)
    {
        return $query->orderBy('created_at', 'desc');


    }
}
