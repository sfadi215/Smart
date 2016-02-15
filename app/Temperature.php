<?php
/**
 * Created by PhpStorm.
 * User: Fadi
 * Date: 2/15/2016
 * Time: 8:09 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Temperature extends Model
{
    protected $fillable = ['sensor_id', 'value'];

    public static function getLatest()
    {
        return DB::select("SELECT T1.* FROM smart.temperatures T1 join (select sensor_id, max(created_at) as maxCreatedAt from temperatures group by sensor_id ) T2
on T1.sensor_id = T2.sensor_id and created_at = maxCreatedAt");


    }
}
