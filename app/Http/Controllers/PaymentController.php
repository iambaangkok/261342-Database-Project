<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Models\Cart;
use App\Models\User;
use App\Models\Productincart;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Order;
use App\Models\Orderdetail;
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
        // $requiredDate =  $request["requiredDate"];
        $totalAmount =  $request["totalAmount"];

        $user = User::where('remember_token', '=', $remember_token)->first();
        $customer = Customer::where('customerNumber', '=', $user->customerNumber)->first();
        $cart = Cart::where('id_user', '=', $user->id)->first();
        $productIncart = Productincart::where('cartid', '=', $cart->cartid)->get();

        /**
         * 200 OK Requirement
         * then
         * เพิ่ม rec ใน payment
         * ลบจน.product ตามสิ่งที่อยู่ใน cart (ตาราง productincart)
         * เพิ่ม rec ใน orders, orderdetail
         */

        //$Check = DB::table('payments')->where('checkNumber', $checkNumber)->first();
        $duplicateCheckNumber = payment::where('checkNumber', '=', $checkNumber)->first();
        if(!$duplicateCheckNumber){
        //if($Check == null){


            //ลบจน.product ตามสิ่งที่อยู่ใน cart (ตาราง productincart)
            foreach ($productIncart as $products){
                
                $code = $products->productCode;
                $result = Product::where('productCode', '=' ,$code)->first();

                DB::transaction(function () use ($result,$products) {
                    $quantity = $products->quantity;
                    $productInstock = $result->quantityInStock;  
                    $result->quantityInStock = $productInstock - $quantity;
                    $result->save();
                });
            }

            // เพิ่ม rec ใน payment
            // DB::insert('insert into payments (customerNumber, checkNumber, paymentDate, amount) values (?, ?, ?, ?)'
            //         , [ $customer->customerNumber, $checkNumber,$requiredDate ,$totalAmount]);

            //ฉบับ น๊นหน๊น
            DB::insert('insert into payments (customerNumber, checkNumber, paymentDate, amount) values (?, ?, ?, ?)'
                    , [ $customer->customerNumber, $checkNumber,now()->format('Y-m-d') ,$totalAmount]);
        
            //
            // เพิ่ม rec ใน orders
            $lastOrder = DB::table('orders')->get()->last();
            $thisOrderNum = $lastOrder->orderNumber+1;
            // DB::insert('insert into orders (orderNumber, orderDate, requiredDate,shippedDate, status,comments, customerNumber) values (?,?,?,?,?,?,?)', 
            //     [ $thisOrderNum,  now()->format('Y-m-d'),$requiredDate, NULL, 'In Process',NULL ,$customer['customerNumber']]);


            //ฉบับ น๊นหน๊น
            DB::insert('insert into orders (orderNumber, orderDate, requiredDate,shippedDate, status,comments, customerNumber) values (?,?,?,?,?,?,?)', 
            [ $thisOrderNum,  now()->format('Y-m-d'),now()->format('Y-m-d'), NULL, 'In Process',NULL ,$customer['customerNumber']]);
            //
            // เพิ่ม rec ใน orderdetail
            $i = 1;
            foreach ($productIncart as $product)  {
                $code = $products->productCode;
                $result = Product::where('productCode', '=' ,$code)->first();
                DB::insert('insert into orderdetails (orderNumber, productCode, quantityOrdered, priceEach, orderLineNumber) values (?, ?, ?, ?, ?)', 
                    [ $thisOrderNum, $product->productCode, $product->quantity ,$result->buyPrice ,$i]);
                $i = $i+1;
            }


            //ลบ cart
            $cart = Cart::where('id_user', '=', $user->id)->delete();


            return response()->json("payment success", 200);;
        }else{
            // return $duplicateCheckNumber->first();
            return response()->json("payment failed, duplicate check number", 422);
        }
    }
}
