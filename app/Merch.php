<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class Merch extends Model
{
    protected $table = 'merch';
    
    public static function get_merch_kategori(){
        return DB::table('merch_kategori')->get();
    }
}
