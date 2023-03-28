<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
    
        if (!$token = auth()->attempt($credentials)) {
            return response()->json(['message' => 'Invalid credentials.'], 401);
        }
    
        return $this->respondWithToken($token);
    }
    
    public function logout()
    {
        auth()->logout();
    
        return response()->json(['message' => 'Logged out.']);
    }
    
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => 30000,
        ]);
    }
    
}
