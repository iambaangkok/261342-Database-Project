<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\Product;
use App\Models\User;
use App\Models\Productincart;
use App\Http\Requests\StorecartRequest;
use App\Http\Requests\UpdatecartRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return with(' success HUM ');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecartRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorecartRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        // $productCode = $request["productCode"];
        $remember_token = $request["remember_token"];
        // $user = User::where('remember_token', '=', $remember_token)->first();


        $showcart = DB::table('Carts')
            ->select(
                'Products.productCode',
                'Products.productName',
                'Products.productLine',
                'Products.productScale',
                'Products.productVendor',
                'Products.productDescription',
                'Productincarts.quantity',
                'Products.MSRP'
            )
            ->join('users', 'users.id', '=', 'carts.id_user')
            ->join('productincarts', 'productincarts.cartid', '=', 'carts.cartid')
            ->join('products', 'products.productCode', '=', 'productincarts.productCode')

            ->where('Users.remember_token', '=', $remember_token)
            ->get();


        return response()->json($showcart, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(cart $cart)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecartRequest  $request
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecartRequest $request, cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(cart $cart)
    {
        //
    }

    public function carts()
    {

        $carts = DB::select('select * from Cart');


        return $carts;

        // return view('cart', ['carts' => $carts]);
    }


    /**
     * 
     * Paramiter in put of cart is Token for idntity $remember_token
     * $id is Productcode
     */
    public function remove(Request $request)
    {

        $productCode = $request["productCode"];
        $remember_token = $request["remember_token"];

    


        $user = User::where('remember_token', '=', $remember_token)->first();
        $product = Product::where('ProductCode', '=', $productCode)->first();
        $cart = Cart::where('id_user', '=', $user->id)->first();


        $productincart = Productincart::where('productCode', '=', $productCode)
            ->where('cartid', '=', $cart->cartid)->first();


        if ($productincart->quantity > 0) {
            $productincart->quantity = $productincart->quantity - 1;
            $product->quantityInStock = $product->quantityInStock + 1;
            $productincart->save();
            $product->save();
            if ($productincart->quantity == 0) {
                $productincart  = Productincart::where('productCode', '=', $productCode)
                    ->delete();
                // $productincart->save();
            }
        } else {
            $productincart  = Productincart::where('productCode', '=', $productCode)
                ->delete();
            $productincart->save();
        }


        return response()->json("delete success", 200);


    }



    public function addToCart(Request $request)
    {
        $productCode = $request["productCode"];
        $remember_token = $request["remember_token"];
        $quantity = $request["quantity"];




        $user = User::where('remember_token', '=', $remember_token)->first();
        $product = Product::where('ProductCode', '=', $productCode)->first();
        $cart = Cart::where('id_user', '=', $user->id)->first();
        // $productincart = Productincart::where('cartid', '=', $cart->cartid)->first();

        // $productincart =Productincart::fineorFile($cart->cartid);


        if ($cart != null) {
            $cart->save();
        } else {
            // $cart = new Cart();
            $cart  = Cart::create(['id_user' => $user->id]);
            $cart->save();
        }

        $productincart = Productincart::where('cartid', '=', $cart->cartid)
            ->where('productCode', '=', $product->productCode)


            ->first();

        if ($productincart != null) {
        } else {
            // $productincart = new Productincart($cart->cartid, $product->productCode);
            $productincart = Productincart::create([
                'cartid' => $cart->cartid,
                'productCode' =>  $product->productCode,
                'quantity' => 0
            ]);

            // $productincart->cartid = $cart->cartid;
            // $productincart->productCode = $product->productCode;
        }

        if($quantity != 0){
            $productincart->quantity = $productincart->quantity + $quantity;
        }else{
            $productincart->quantity = $productincart->quantity + 1 ;
        }


        // $product->quantityInStock = $product->quantityInStock - 1;

        $productincart->save();
        // $product->save();
        return response()->json($cart, 200);
    }

}
