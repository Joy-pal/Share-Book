<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    protected $guard = 'api';
    public function __construct()
    {
        $this->middleware('guest:api')->only('login');
        $this->middleware('apiAuth')->only(['me', 'logout']);
    }


    public function login(Request $request) {
        $data = $request->only(['email', 'password']);
        $validator = Validator::make($data, [
            'email'     => ['required', 'string', 'email'],
            'password'  => ['required', 'string', 'min:6']
        ]);
        if($validator->fails()) {
            return response()->json([
                'type'   => 'validation_error',
                'errors' => $validator->messages()
            ], 400);
        }

        //$token = auth($this->guard)->attempt($data);
        if(!$token = auth($this->guard)->attempt($data)) {
            return response()->json([
                'type'  => 'unauthorised',
                'error' => 'Credentials did not match!'
            ], 401);
        }

        return $this->respondWithToken($token);
    }
    public function refresh() {
        try {
            $token = auth($this->guard)->refresh();
        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            return response()->json([
                'type'  => 'unauthenticated',
                'error' => 'Your token is not valid for creating new token!'
            ], 401);
        }
        return $this->respondWithToken($token);
    }

    public function me() {
        return response()->json([
            'user' => auth($this->guard)->user()
        ], 200);
    }

    public function logout() {
        auth($this->guard)->logout();

        return response()->json('You Have Successfully Logged out!', 200);
    }
    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth($this->guard)->factory()->getTTL() * 60,
            'user'       => auth($this->guard)->user()
        ], 200);
    }
}
