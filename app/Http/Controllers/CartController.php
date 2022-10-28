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
    public function show(cart $cart)
    {
        //
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
    public function remove($id, $remember_token)
    {

        $cart = Cart::findOrFail($id);
        $product = Product::where('name', '=', $cart->name)->first();
        DB::transaction(function () use ($product, $cart) {
            $product->stock = $product->stock + $cart->quantity;
            $product->save();
            $cart->delete();
        });
        return back()->with('success', 'Product removed successfully');
    }



    public function addToCart(Request $request)
    {
        $productCode = $request["productCode"];
        $remember_token = $request["remember_token"];


        $user = User::where('remember_token', '=', $remember_token)->first();
        $product = Product::where('ProductCode', '=', $productCode)->first();
        $cart = Cart::where('id_user', '=', $user->id)->first();
        // $productincart = Productincart::where('cartid', '=', $cart->cartid)->first();
        
        // $productincart =Productincart::fineorFile($cart->cartid);


        if ($cart != null) {
            $cart->save();
        } else {
            $cart = new Cart();
            $cart->id_user = $user->id;
            $cart->save();
        }
        $productincart = Productincart::where('cartid', '=', $cart->cartid)->first();

        if($productincart != null){
            $productincart->save();
        }else{
            $productincart = new Productincart();
            $productincart->quantity = $productincart->quantity + 1;
            $product->quantityInStock = $product->quantityInStock - 1 ;

        }
        // $productincart->save();
        // $product->save();
        return response()->json($cart, 200);
        // return redirect()->back()->with('success', 'Product added to cart successfully!');
        // DB::transaction(function () use($user,$product,$cart,$productincart,$productCode){

        //     if($cart!= null){
        //         $cart->save();
        //     }else{
        //         $cart = new Cart();
        //         $cart->cartid = $cart->cartid + 1 ;
        //         $cart->id_user = $user->id;
        //         $cart->save();

        //     }

        //     if($productincart != null){
        //         $productincart->quantity = $productincart->quantity + 1;
        //         $productincart->productCode = $productCode;
        //         $productincart->save();
        //     }else{
        //         $productincart = new Productincart();
        //         $productincart->cartid = $cart->cartid;
        //         $productincart->ProductCode = $productCode;
        //         $productincart->quantity = $productincart->quantity + 1;
        //     }

        //     $product->quantity = $product->quantity - 1 ;
        //     $product->save();

        //     return redirect()->back()->with('success', 'Product added to cart successfully!');
        // });



        // $product = Product::findOrFail($id);
        // $cart = Cart::where('name', '=', $product->name)->first();
        // DB::transaction(function () use ($product, $cart) {
        //     if ($cart != null) {
        //         $cart->quantity = $cart->quantity + 1;
        //         $cart->save();
        //     } else {
        //         $cart = new Cart();
        //         $cart->name = $product->name;
        //         $cart->quantity = 1;
        //         // $cart->price = $product->price;
        //         // $cart->image = $product->image;

        //         $cart->save();
        //     }
        //     $product->quantityInStock = $product->quantityInStock - 1;
        //     $product->save();
        // });

        // return redirect()->back()->with('success', 'Product added to cart successfully!');

    }
}
