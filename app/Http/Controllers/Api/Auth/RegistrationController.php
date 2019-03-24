<?php

namespace App\Http\Controllers\Api\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    public function __construct(){
        $this->middleware('guest:api');
    }

    public function register( Request $request){
//        $data = $request->only(['name', 'email', 'password']);
//        $validator = Validator::make($data, [
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6']
        ]);
        if($validator->fails()) {
            return response()->json([
                'type'   => 'validation_error',
                'errors' => $validator->messages()
            ], 400);
        }

        $user = $this->create($request->only(['name', 'email', 'password']));
        $token = auth('api')->login($user); // auth() or Auth

        return $this->respondWithToken($token);
    }
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60,
            'user' => auth('api')->user()
        ], 200);
    }
}
