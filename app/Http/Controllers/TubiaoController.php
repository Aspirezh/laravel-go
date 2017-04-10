<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Models\infos;
use App\Http\Requests;

class TubiaoController extends Controller
{
    public function index(Request $request)
    {
        $info = infos::pluck('name');
//        dd($info[0]);
        return view('admin/tubiao',['info' => $info]);
    }
}
