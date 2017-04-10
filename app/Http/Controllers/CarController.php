<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Http\Requests;
use Illuminate\Database\Eloquent\Relations\HasOne;


class CarController extends Controller
{
    public function index()
    {
        $car = Car::orderby('id','desc');
        $cars = $car;
        $cars = $cars->paginate(5);
        return view('admin/Carindex',['cars'=> $cars]);
    }
}
