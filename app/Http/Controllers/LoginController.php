<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Crypt;
use App\Http\Requests;
use Symfony\Component\HttpFoundation\Session\Session;
//use Login;
class LoginController extends Controller
{
    public function index() {
            
      return view('login/login');
    }
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function login(Request $request) {
//        $ppa = $request->all();
//        dd($ppa);
        $a = $request->input('username');
        $b = $request->input('password');
        $username = DB::table('users')->where('username','admin@qq.com')->value('username');
//        dd($username);
        $password = Crypt::decrypt(DB::table('users')->where('username','admin@qq.com')->value('password'));
        if($a!==$username || $b!==$password){
            return "plase put correct username or password！";
        }else{
            return redirect('admin');
        }


    }

}
