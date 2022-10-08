<?php

namespace App\Http\Controllers;

use   Illuminate\Http\Request;
use   App\Http\Requests\RegisterRequest;
use   App\Models\User;
use   App\Models\Customers;

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
        // $user =  array(
        //     $array1["username"],
        //     $array1["email"],
        //     $array1["password"],
        //     $array1["password_confirmation"],
        // );

        // $customer =  array(
        //     $array1["contactFirstName"],
        //     $array1["contactLastName"],
        //     $array1["phone"],
        //     $array1["customerName"],
        //     $array1["addressLine1"],
        //     $array1["addressLine2"],
        //     $array1["country"],
        //     $array1["state"],
        //     $array1["city"],
        //     $array1["postalCode"],
        // );

        // User::create($user);
        // // Customer::create($customer);
        // return ( $array1);
        $user = User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => $data['password'],
            'password_confirmation' => $data['password_confirmation'],
        ]);

        $customers = Customers::create([
            'customerName' => $data['customerName'],
            'contactFirstName' => $data['contactFirstName'],
            'contactLastName' => $data['contactLastName'],
            'phone' => $data['phone'],
            'addressLine1' => $data['addressLine1'],
            'addressLine2' => $data['addressLine2'],
            'city' => $data['city'],
            'state' => $data['state'],
            'postalCode' => $data['postalCode'],
            'country' => $data['country']
            
        ]);

        return redirect('/register-complete')->with('success', "Account successfully registered.");
    }

    public function registerComplete(){

        return view('register-complete');
    }
}
