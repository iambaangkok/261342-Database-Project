<?php

namespace App\Http\Controllers;

use   Illuminate\Http\Request;
use   App\Http\Requests\RegisterRequest;
use   App\Models\User;
use   App\Models\Customer;

class RegisterController extends Controller
{
    /*** Display register page.* 
     * 
     * *  @return\Illuminate\Http   \Response*/
    public function show(){
        return view('auth.register');
    }
    
    /*** Handle account registration request* *  
     * @paramRegisterRequest$request* *  
     * 
     * @return\Illuminate\Http   \Response*/
    
    public function register(RegisterRequest $request) {
        // $user =  User::create($request->validated());
        // auth() ->login($user);
        // return redirect('/register-complete') -> with('success',  "Account successfully registered.");
        $data = $request->validated();
        
        $user = User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => $data['password'],
            'password_confirmation' => $data['password_confirmation'],
        ]);

        $customers = Customer::create([
            'customerNumber' => rand(1,100),
            'customerName' => $data['customerName'],
            'contactFirstName' => $data['contactFirstName'],
            'contactLastName' => $data['contactLastName'],
            'phone' => $data['phone'],
            'addressLine1' => $data['addressLine1'],
            'addressLine1' => $data['addressLine2'],
            'city' => $data['city'],
            'state' => $data['state'],
            'postalCode' => $data['postalCode'],
            'country' => $data['country']
            
        ]);

        // auth() ->login($user);
        return redirect('/register-complete') -> with('success',  "Account successfully registered.");
    }

    public function registerComplete(){

        return view('register-complete');
    }
}
