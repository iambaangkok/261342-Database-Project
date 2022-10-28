<?php

namespace App\Http\Controllers;

use   Illuminate\Http\Request;
use   App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\DB;
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
        $data = $request->all();

        $customerCheck = DB::table('customers')->where('customerName', $data['customerName'])->first();
        //dd($customerCheck);
        if ($customerCheck == null):
            $customer = Customer::create([
            // 'customerNumber' => rand(1,100),
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
            $customerCheck = DB::table('customers')->where('customerName', $data['customerName'])->first();
        endif;
    
        $id = $customerCheck->customerNumber;
        $userCheck = DB::table('users')->where('customerNumber', $id)->first();
        if($userCheck):
            return response()->json(['success'=>'false','message' => 'Login Failed.'], 422);
        endif;

        $user = User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'customerNumber' => $id,
            'password' => $data['password'],
            'password_confirmation' => $data['password_confirmation'],
        ]);

        return response()->json($user, 200);
    }

    public function registerComplete(){

        return view('register-complete');
    }
}
