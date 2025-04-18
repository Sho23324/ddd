<?php

namespace App\Repository;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Facades\JWTAuth;

class JwtAuthRepository  implements JwtAuthRepositoryInterface
{
    public function register(Request $request)
    {

        try {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|min:6',
                'role' => 'required|exists:roles,name',
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'message' => 'Validation Failed',
                'errors' => $e->errors()
            ], 422);
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);

        $user->assignRole($request->role);

        $token = JWTAuth::fromUser($user);
        return response()->json(compact('user', 'token'));
    }





    public function login(Request $request)
    {
        try {
            $request->validate([
                'email'=>'required|email',
                'password'=>'required|string|min:6',
            ]);
        } catch (ValidationException $e) {
            return response()->json([
                'message'=>'Validation Failed',
                'errors'=>$e->errors()
            ],422);
        }
        $credential = $request->only('email', 'password');
        if (!$token = JWTAuth::attempt($credential)) {
            return response()->json(['error' => 'Invalid Credentails'], 401);
        }
        $user = Auth::user();
        return response()->json(compact('user','token'));
    }

    
    
    
    public function logout()
    {
        JWTAuth::invalidate(JWTAuth::getToken());
        return response()->json(['message' => 'Successfully logged out']);
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
