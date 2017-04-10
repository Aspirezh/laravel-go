<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class infos extends Model
{
//    $infos = DB::table('users')->where('username','admin@qq.com')->value('username');
      public $table='infos';
      protected $fillable = [
        'id', 'name', 'phone',
      ];

    public static function getinfo(){
        $getinfo = DB::table('users');
        return $getinfo;
    }
}
