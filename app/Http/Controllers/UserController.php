<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email'    => $request->email,
            'password' => $request->password,
        ]);

        $token = auth()->login($user);

        return $this->respondWithToken($token,$user);
    }

    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
        $user = auth('api')->user();
        $user= User::where('id',$user->id)->first();
        return $this->respondWithToken($token,$user);
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }

    protected function respondWithToken($token,$user)
    {
        return response()->json([
            'success'=>true,
            'access_token' => $token,
            'data'=>$user,
            'token_type'   => 'bearer',
            'expires_in'   => auth()->factory()->getTTL() * 60
        ]);
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'email' => ['email', 'unique:users'],
            'password' => ['min:3']
        ]);

        $user = \App\Models\User::create($data);

        return response()->json(['user' => $user]);
    }

}
