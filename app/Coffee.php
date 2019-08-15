<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Coffee extends Model
{
    protected $table = 'coffee';

    public static function get_early(){
        return DB::table('early')->get();
    }

    public static function get_people(){
        return DB::table('people')->get();
    }
}