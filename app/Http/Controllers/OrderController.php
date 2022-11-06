<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function pagination(Request $request)
    {
        $remember_token = $request["remember_token"];
        
        $user = User::where('remember_token', '=' , $remember_token)->first();
        $customer = Customer::where('customerNumber', '=', $user->customerNumber)->first();
        $page = Order::where('customerNumber', '=',$customer->customerNumber)
                    ->paginate(15);
        ;

        return $page;

    }

    public function orderdetail(Request $request)
    {
        $allOrder = DB::select('select productCode,quantityOrdered, priceEach from orderdetails where orderNumber=?', [$request['orderNumber']]);
        
        return response()->json($allOrder ,200);
    }

}
