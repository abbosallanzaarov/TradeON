<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\Register;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use \Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{

    public function login(LoginRequest $request){

        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        return response()->json([
            'token'=> $user->createToken($request->email)->plainTextToken,
        ]);
    }
    public function register(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name'=>'required|string',
            'email'=>'unique:users|email',
            'phone'=>'required|unique:users',
            'image'=>'string|nullable',
            'password'=>'required|min:8|max:16'
        ]);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'The given data was invalid.',
                'errors' => $validator->errors(),
            ], 422);
        }

        $store = User::create($request->input());

        return response()->json([
            'token'=> $store->createToken($request->email)->plainTextToken,
        ]);
    }
    public function logout(Request $request){

        $request->user()->tokens()->delete();
        return response()->json(['message' => 'Logged out']);

    }
}
