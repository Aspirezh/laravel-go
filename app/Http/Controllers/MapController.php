<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MapController extends Controller
{
    public function index(request $request)
    {
        if($request->isMethod('post')){
            $fname = $request->get('fname');
            $lname = $request->get('lname');
            return view('admin/Map',['fname' => $fname,'lname' =>$lname ]);
        }else{
            return 'this is error';
        }
    }
}
