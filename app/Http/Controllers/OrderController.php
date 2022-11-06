<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function orderall(Request $request)
    {
        $remember_token = $request["remember_token"];
        
        $user = User::where('remember_token', '=' , $remember_token)->first();
        $customer = Customer::where('customerNumber', '=', $user->customerNumber)->first();
        $order = Order::where('customerNumber', '=',$customer->customerNumber)
                ->get();
        ;

        return $order;

    }
}
