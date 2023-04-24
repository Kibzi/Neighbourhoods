<?php

namespace App\Http\Controllers;

use App\Http\Request\LoginRequest;
use App\Http\Request\SignupRequest;
use App\Models\user;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function signup(SignupRequest $request)
    {
        $data = $request->validation();

       /**  @var \App\Models\User $user */
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password'])
        ]);
        $token = $user->createToken('main')->plainTextToken;

        return reponse([
           'user' => $user,
           'token' => $token
        ]);
    }


    public function login(LoginRequest $request)

    {
         $credentitals = $request->validation();
         $remember = $credentitals['remember'] ?? false;
         unset($credentials['remember']);

         if (!Auth::attempt($credentials, $remember)) {
            return response([
                'error' => 'The Provided credentials are not correct'
            ], 422);
         }
         $user = Auth::user();
         $token = $user->createToken('main')->plainTextToken;


         return reponse([
            'user' => $user,
           'token' => $token
         ]);
    }

    public function logout(request $request)
    {
      /** @var User $user */
      $user = Auth::user();
      //revoke the token tAT WAS USED TO AUTHENTICATE THE CURRENT REQUEST...
      $user->currentAccessToken()->delete();

      return response([
        'success'=> true
      ]);

    }
}
