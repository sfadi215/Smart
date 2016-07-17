<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WaterLevel extends Model
{
    //
    protected $fillable = ['watervalue'];

    public function scopeGetLatest($query)
    {
        return $query->orderBy('created_at', 'desc');


    }
}
