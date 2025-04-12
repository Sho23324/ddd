<?php
namespace App\Repository;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class jwtAuthRepository  implements JwtAuthRepositoryInterface{
    public function register(Request $request)
    {
        $request->validate(([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]));

        $user = User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
        ]);
        $token = JWTAuth::fromUser($user);
        return response()->json(compact('user','token'));
    }
    public function login(Request $request)
    {
        $credential = $request->only('email','password');
        if(!$token = JWTAuth::attempt($credential)){
            return response()->json(['error'=>'Invalid Credentails'],401);
        }
       return response()->json(compact('token'));
    }

    public function logout(){
        JWTAuth::invalidate(JWTAuth::getToken());
        return response()->json(['message'=>'Successfully logged out']);
    }

    public function getUser()
    {
        try {
            if (! $user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['error' => 'User not found'], 404);
            }
        } catch (JWTException $e) {
            return response()->json(['error' => 'Invalid token'], 400);
        }

        return response()->json(compact('user'));
    }
}

