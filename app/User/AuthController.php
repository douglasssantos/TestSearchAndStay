<?php

namespace App\User;

use App\Http\Controllers\Controller;
use App\User\Http\Requests\AuthRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
	public AuthService $service;

	public function __construct(AuthService $service)
	{
		$this->service = $service;
	}

    public function login(AuthRequest $request)
    {
        return $this->service->login($request->validated());
    }

    public function logout(Request $request)
    {
        return $this->service->logout($request);
    }

}
