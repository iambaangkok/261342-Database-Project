<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutController extends Controller
{

    public function show() {
        return view('auth.logout');
        } 


    public function perform(Request $request)
    // public function perform()
    {
        Session::flush();
        Auth::logout();
        // $user = $this;
        // return response()->json(['logout'=>'true'], 200);
        return response()->json($request, 200);

    }
    
}
