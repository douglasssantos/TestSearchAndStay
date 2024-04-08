<?php

namespace App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Larakeeps\LaraDriven\Traits\ApiResponses;

class AuthService
{
    use ApiResponses;

    private array $onlyTheAttributes = ["email", "password"];

    public function getTokens()
    {
        return auth()->user()->tokens();
    }
    public function login($credentials)
    {
        $credentials = array_filter($credentials, fn($field) => in_array($field, $this->onlyTheAttributes),
            ARRAY_FILTER_USE_KEY);

        if(!Auth::attempt($credentials)) $this->unauthorized("Invalid email or password!");

        $token = auth()->user()->createToken($credentials["email"]);

        return $this->success("User successfully authenticated!", ["access_token" => $token->plainTextToken], 200, false);
    }


    public function logout(Request $request)
    {
        Auth::user()->tokens()->delete();
        $request->user()->currentAccessToken()->delete();

        return $this->success("User successfully logged out");

    }
}
