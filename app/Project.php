<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $table = 'project';

    public static function get_guides(){
        return DB::table('guides');
    }
}

