<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

use App\Http\Requests;

class GostController extends Controller
{
    public function index(request $request) {
        $a = $request->all();
        $users = DB::select('select * from users');
//      dd($users[0]->id);

        return view('admin/message',['users' => $users]);


    }
}
