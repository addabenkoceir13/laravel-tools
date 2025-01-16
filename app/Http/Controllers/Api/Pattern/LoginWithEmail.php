<?php

namespace App\Http\Controllers\Api\Pattern;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginWithEmail implements LoginInterface
{
    public function login(Request $request)
    {
        if (Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'access_token'  => $request->user()->createToken('authToken')->accessToken,
                'token'         => $request->user()->createToken($request->email)->plainTextToken,
                'user'          => $request->user(),
                'message'       => 'Logged in successfully.'
            ]);
        }

        return response()->json(['error' => 'Invalid email or password.'], 401);
    }
}
