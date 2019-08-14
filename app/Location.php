<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Location extends Model
{
    protected $table = 'store';

    public static function get_store_schedule(){
        return DB::table('jadwal')->get();
    }
}
