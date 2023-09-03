<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\User;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;

class AuthController extends Controller
{
    use HttpResponses;

    public function register(StoreUserRequest $request)
    {
        $request->validated();

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->assignRole($request->role);

        return $this->success([
            'user' => $user,
            'token' => $user->createToken('Api Token of' . $user->name)->plainTextToken,
        ]);
    }

    public function login(LoginUserRequest $request)
    {
        $request->validated();

        if(!Auth::attempt($request->only('email', 'password'))){
            return $this->error('', 'Credentials do not match', 401);
        }

        $user = User::where('email', $request->email)->first();

        return $this->success([
            'user' => $user,
            'token' => $user->createToken('Api token of' . $user->name)->plainTextToken,
        ]);

    }

    public function logout()
    {
        Auth::user()->currentAccessToken()->delete();

        return $this->success([
            'data' => '',
            'message' => 'You have successfully logged out and your token has been deleted.'
        ]);
    }
}
