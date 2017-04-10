<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Http\Request;
use App\Models\Ceshi;
use App\Http\Requests;

class CeshiController extends Controller
{
    public function go()
    {
        $account = Ceshi::find(1)->hasOneAccount();
        $data = $account->get()->toArray();
//        dd($data);
        return view('admin/ceshi',['data' => $data]);
    }

}
