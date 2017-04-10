<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\Account;

class Ceshi extends Model
{
    protected $table = 'User';

//    public static function getinfo(){
//        $getinfo = DB::table('users');
//        return $getinfo;
//    }

    public function hasOneAccount()
    {
        return $this->hasOne('App\Models\Account','user_id','id');
    }
}
