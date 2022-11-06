<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Cart;
use App\Models\User;
use App\Models\Productincart;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function payment(Request $request)
    {
        $remember_token = $request["remember_token"];
        $checkNumber =  $request["checkNumber"];
        $requiredDate =  $request["requiredDate"];
        $totalAmount =  $request["totalAmount"];

        $user = User::where('remember_token', '=', $remember_token)->first();
        $customer = Customer::where('customerNumber', '=', $user->customerNumber)->first();
        $cart = Cart::where('id_user', '=', $user->id)->first();
        $productIncart = Productincart::where('cartid', '=', $cart->cartid)->get();

        /**
         * 200 OK Requirement :
         * Customer creditLimit	>= totalAmount
         * then
         * ลบเงินใน creditLimit ตาม totalAmount
         * เพิ่ม rec ใน payment
         * ลบจน.product ตามสิ่งที่อยู่ใน cart (ตาราง productincart)
         */

        if($customer->creditLimit >= $totalAmount && $customer->creditLimit != null){
            Customer::where('customerNumber',$customer->customerNumber)
                ->update(['creditLimit' => $customer->creditLimit - $totalAmount]);
            DB::insert('insert into payments (customerNumber, checkNumber, paymentDate, amount) values (?, ?, ?, ?)'
                        , [ $customer->customerNumber, $checkNumber,$requiredDate ,$totalAmount]);
            foreach ($productIncart as $products){
                $code = $products->productCode;
                $result = Product::where('productCode', '=' ,$code)->first();
                $productInstock = $result->quantityInStock;
                Product::where('productCode', '=' ,$code)
                    ->update(['quantityInStock' => $productInstock-$products->quantity]);
            }
            return response()->json("payment success", 200);
        }else{
            return response()->json("payment failed", 422);
        }

        
       
        return $productInstock;

    }
}
