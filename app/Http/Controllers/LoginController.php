<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function show() {
        return view('auth.login');
        } 
        /** * Handle account login request * * @param LoginRequest $request * * @return \Illuminate\Http\Response  */
    
    public function login(LoginRequest $request) {
            
            $credentials = $request->getCredentials();
            
            if(!Auth::validate($credentials)):
                return response()->json(['success'=>'false','message' => 'Login Failed.'], 422);
                endif; 
                $user = Auth::getProvider()->retrieveByCredentials($credentials);
                Auth::login($user, $remember = true);
                $token = $user['remember_token'];
                return response()->json($token, 200);
        } 
        
        /** * Handle response after user authenticated * * @param Request $request * @param Auth $user * * @return \Illuminate\Http\Response */
        protected function authenticated(Request $request, $user) 
        {
            return response()->json($user, 200);
        }
}
