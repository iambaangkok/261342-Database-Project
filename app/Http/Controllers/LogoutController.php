<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class LogoutController extends Controller
{
    // public function show() {
    //     return view('logout'); 
    // } 

    public function getToken(Request $request)
    {
        // dd($request);

    }

    public function logout(Request $request)
    {
        // $user = User::query()
        //     -> where('remember_token', 'LIKE', "%{$request["token"]}%")
        //     -> get();

        // $user->remember_token = null;
        // return $user;

        $results = DB::select('select * from users where remember_token=?', [$request["token"]]);
        DB::update('UPDATE users SET remember_token = NULL WHERE remember_token=?', [$request["token"]]);
        // $results['remember_token'] = null;
        Session::flush();
        Auth::logout();
        return $results;


        // DB::transaction(function () use ($user) {
        //     $user -> remember_token = null;
        // });
        // dd($request);
        // $user = Auth::user();
        
        // return response()->json(['success'=>'true','message' => 'Logout Successfully.'], 200);
        
        // $user->remember_token = null;
        // $user->save();
        // // dd($user);

        

        
        // return response()->json(['success'=>'true','message' => 'Logout Successfully.'], 200);
    }
    
}
