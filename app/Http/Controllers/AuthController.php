<?php

namespace App\Http\Controllers;

use JWTAuth;
use Carbon\Carbon;
use App\Models\User;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Http\Request;

use App\Http\Requests;

class AuthController extends Controller
{
    public function signup(Request $request)
{
    User::create([
        'phone' => $request->json('phone'),
        'username' => $request->json('username'),
        'email' => $request->json('email'),
        'password' => bcrypt($request->json('password')),
    ]);
}

    public function signin(Request $request)
    {
        try {
            $token = JWTAuth::attempt($request->only('phone', 'password'), [
                'exp' => Carbon::now()->addWeek()->timestamp,
            ]);
            if (!$token) {
                return response()->json([
                    'error' => 'Could not authenticate',
                ], 401);
            }
        } catch (JWTException $e) {
            return response()->json([
                'error' => 'Could not authenticate',
            ], 500);
        }

        return response()->json(compact('token'));
    }

    public function user()
    {
        // return response()->json(JWTAuth::parseToken()->toUser());
        return response()->json(JWTAuth::parseToken()->authenticate());
    }
}
